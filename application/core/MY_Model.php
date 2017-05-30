<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class MY_Model extends CI_Model {
        
        // Ten table
        var $table = '';
        
        // Key chinh cua table
        var $key = 'id';
        
        // Order mac dinh (VD: $order = array('id', 'desc))
        var $order = '';
        
        // Cac field select mac dinh khi get_list (VD: $select = 'id, name')
        var $select = '';
        
        /**
         * Them row moi
         * $data : du lieu ma ta can them
         */
        function create($data = array())
        {
            if($this->db->insert($this->table, $data))
            {
               return TRUE;
            }else{
                return FALSE;
            }
        }
        
        /**
         * Cap nhat row tu id
         * $id : khoa chinh cua bang can sua
         * $data : mang du lieu can sua
         */
        function update($id, $data)
        {
            if (!$id)
            {
                return FALSE;
            }
            
            $where = array();
            $where[$this->key] = $id;
            $this->update_rule($where, $data);
            
            return TRUE;
        }
        
        /**
         * Cap nhat row tu dieu kien
         * $where : dieu kien
         * $data : mang du lieu can cap nhat
         */
        function update_rule($where, $data)
        {
            if (!$where)
            {
                return FALSE;
            }
            
            $this->db->where($where);
            $this->db->update($this->table, $data);

            return TRUE;
        }

        /**
         * Xoa row tu id
         * $id : gia tri cua khoa chinh
         */
        function delete($id)
        {
            if (!$id)
            {
                return FALSE;
            }
            //neu la so
            if(is_numeric($id))
            {
                $where = array($this->key => $id);
            }else
            {
                //$id = 1,2,3...
                $where = $this->key . " IN (".$id.") ";
            }
            $this->del_rule($where);
            
            return TRUE;
        }
        
        /**
         * Xoa row tu dieu kien
         * $where : mang dieu kien de xoa
         */
        function del_rule($where)
        {
            if (!$where)
            {
                return FALSE;
            }
            
            $this->db->where($where);
            $this->db->delete($this->table);
         
            return TRUE;
        }
        
        /**
         * Thực hiện câu lệnh query
         * $sql : cau lenh sql
         */
        function query($sql){
            $rows = $this->db->query($sql);
            return $rows->result;
        }
        
        /**
         * Lay thong tin cua row tu id
         * $id : id can lay thong tin
         * $field : cot du lieu ma can lay
         */
        function get_info($id, $field = '')
        {
            if (!$id)
            {
                return FALSE;
            }
            
            $where = array();
            $where[$this->key] = $id;
            
            return $this->get_info_rule($where, $field);
        }
        
        /**
         * Lay thong tin cua row tu dieu kien
         * $where: Mảng điều kiện
         * $field: Cột muốn lấy dữ liệu
         */
        function get_info_rule($where = array(), $field= '')
        {
            if($field)
            {
                $this->db->select($field);
            }
            $this->db->where($where);
            $query = $this->db->get($this->table);
            if ($query->num_rows())
            {
                return $query->row();
            }
            
            return FALSE;
        }

        
        
         /**
         * Lay thong tin cua row 
         * $field: Cột muốn lấy dữ liệu
         */
         function get_Field($field= '')
        {
            
            $this->db->select($field);
            
            $query = $this->db->get($this->table);
            return $query->result();
            
           
        }

        /**
         * Lay tong so
         */
        function get_total($input = array())
        {
            $this->get_list_set_input($input);
            
            $query = $this->db->get($this->table);
            
            return $query->num_rows();
        }
        
        /**
         * Lay tong so
         * $field: cot muon tinh tong
         */
        function get_sum($field, $where = array())
        {
            $this->db->select_sum($field);//tinh rong
            $this->db->where($where);//dieu kien
            $this->db->from($this->table);
            
            $row = $this->db->get()->row();
            foreach ($row as $f => $v)
            {
                $sum = $v;
            }
            return $sum;
        }
        
        /**
         * Lay 1 row
         */
        function get_row($input = array()){
            $this->get_list_set_input($input);
            
            $query = $this->db->get($this->table);
            
            return $query->row();
        }
        
        /**
         * Lay danh sach
         * $input : mang cac du lieu dau vao
         */
        function get_list($input = array())
        {
            //xu ly ca du lieu dau vao
            $this->get_list_set_input($input);
            
            //thuc hien truy van du lieu
             $query = $this->db->get($this->table);
           
            //echo $this->db->last_query();
            return $query->result();
        }
        
        /**
         * Gan cac thuoc tinh trong input khi lay danh sach
         * $input : mang du lieu dau vao
         */
        
        protected function get_list_set_input($input = array())
        {
            
            // Thêm điều kiện cho câu truy vấn truyền qua biến $input['where'] 
            //(vi du: $input['where'] = array('email' => 'hocphp@gmail.com'))
            if ((isset($input['where'])) && $input['where'])
            {
                $this->db->where($input['where']);
            }
            
            //tim kiem like
            // $input['like'] = array('name' => 'abc');
            if ((isset($input['like'])) && $input['like'])
            {
                $this->db->like($input['like'][0], $input['like'][1]); 
            }
            
            // Thêm sắp xếp dữ liệu thông qua biến $input['order'] 
            //(ví dụ $input['order'] = array('id','DESC'))
            if (isset($input['order'][0]) && isset($input['order'][1]))
            {
                $this->db->order_by($input['order'][0], $input['order'][1]);
            }
            else
            {
                //mặc định sẽ sắp xếp theo id giảm dần 
                $order = ($this->order == '') ? array($this->table.'.'.$this->key, 'desc') : $this->order;
                $this->db->order_by($order[0], $order[1]);
            }
            
            // Thêm điều kiện limit cho câu truy vấn thông qua biến $input['limit'] 
            //(ví dụ $input['limit'] = array('10' ,'0')) 
            if (isset($input['limit'][0]) && isset($input['limit'][1]))
            {
                $this->db->limit($input['limit'][0], $input['limit'][1]);
            }
            
        }

        /**
        * lấy ra giá trị mới điều kiện hoặc
        */

        public function get_or($where)
        {
             $this->db->where($where);
            //thuc hien cau truy van lay du lieu
            $query = $this->db->get($this->table);

            return $query->result();
        }
        
        /**
         * kiểm tra sự tồn tại của dữ liệu theo 1 điều kiện nào đó
         * $where : mang du lieu dieu kien
         */
        function check_exists($where = array())
        {
            $this->db->where($where);
            //thuc hien cau truy van lay du lieu
            $query = $this->db->get($this->table);
            
            if($query->num_rows() > 0){
                return TRUE;
            }else{
                return FALSE;
            }
        }



        function getOneFlag($input = array() )
        {
            $this->db->where($input);
            $query = $this->db->get($this->table);
            $row = $query->row();
            if(count($row) > 0 )
            {
                return false;
            }
            return true;
        }



        /**
         *  Lấy ra dữ liệu bảng kế hoạch chung
         @@ $start giá trị bắt đầu
         @@ $num giá trị số phần tử hiện thị trên 1 trang
         */
        public function get_join($start , $num)
        {
            $sql = "SELECT kehoachchung.*, tenchuyennganh,hoten , tenhedaotao  FROM kehoachchung  INNER JOIN chuyennganh ON kehoachchung.chuyennganh = chuyennganh.machuyennganh INNER JOIN admin ON kehoachchung.nguoithaotac = admin.maGV INNER JOIN hedaotao ON kehoachchung.mahedaotao = hedaotao.mahedaotao  ORDER BY kehoachchung.id DESC LIMIT {$start},{$num}  ";
            // Thêm điều kiện limit cho câu truy vấn thông qua biến $input['limit'] 
            //(ví dụ $input['limit'] = array('10' ,'0')) 
            
           $query = $this ->db-> query($sql);
                       
            return $query->result();

        }
        

        /*
        *
        * Seach kế hoạch chung
        @@ giá trị key tìm kiếm 
        *
        */
        public function get_Join_Seach($key)
        {
            $sql = "SELECT kehoachchung.*, tenchuyennganh,hoten , tenhedaotao  FROM kehoachchung  INNER JOIN chuyennganh ON kehoachchung.chuyennganh = chuyennganh.machuyennganh INNER JOIN admin ON kehoachchung.nguoithaotac = admin.maGV INNER JOIN hedaotao ON kehoachchung.mahedaotao = hedaotao.mahedaotao  WHERE makehoachchung  LIKE'%$key%' OR  tenchuyennganh LIKE'%$key%' OR hoten LIKE'%$key%' OR tenhedaotao LIKE'%$key%'  ";
            
            
           $query = $this ->db-> query($sql);
                       
            return $query->result();

        }

        /*
            Lấy ra dữ liệu bảng chi tiết kế hoạch chuyên ngành
            @@ $id truyền vào giá trị id của kế hoạch chung cho chuyên ngành
        */
        
        public function get_join_detail($id)
        {
            $sql = "SELECT kehoachchuyennganh.id, monhoc.mamonhoc, tenmonhoc,soTCLT,soTCTH,TCM,monhoc.giaovien,kehoachchuyennganh.hocky,hoten,kehoachchuyennganh.created_at , kehoachchuyennganh.updated_at
            FROM kehoachchuyennganh 
            INNER JOIN  kehoachchung ON kehoachchuyennganh.makehoachchung = kehoachchung.makehoachchung 
            LEFT JOIN  chuyennganh  ON kehoachchung.chuyennganh = chuyennganh.machuyennganh
            LEFT JOIN  monhoc ON kehoachchuyennganh.mamonhoc = monhoc.mamonhoc
            LEFT JOIN admin ON  kehoachchung.nguoithaotac= admin.maGV
            WHERE kehoachchuyennganh.machuyennganh = {$id} ORDER BY kehoachchuyennganh.hocky ASC ";
            
           $query = $this ->db-> query($sql);
                       
            return $query->result();

        }
         
        /**
         *  Lấy ra dữ liệu kế hoạch chung của lớp
         @@ $start giá trị bắt đầu
         @@ $num giá trị số phần tử hiện thị trên 1 trang
         */
        public function getKeHoachTheoLop($start , $num)
        {
            $sql = "SELECT kehoachtheolop.*,tenchuyennganh,tenhedaotao,tenlop,hoten
            FROM  kehoachtheolop
            INNER JOIN  chuyennganh ON kehoachtheolop.machuyennganh = chuyennganh.machuyennganh
            LEFT JOIN   hedaotao  ON kehoachtheolop.mahedaotao= hedaotao.mahedaotao
            LEFT JOIN   lop  ON kehoachtheolop.malop= lop.malop
            LEFT JOIN admin ON  kehoachtheolop.nguoithaotac= admin.maGV
            ORDER BY kehoachtheolop.id DESC LIMIT {$start},{$num}

            ";
            
           $query = $this ->db-> query($sql);
                       
            return $query->result();
        }


         /**
         *  Seach  dữ liệu kế hoạch chung của lớp
         @@ $start giá trị bắt đầu
         @@ $num giá trị số phần tử hiện thị trên 1 trang
         */
        public function seachKeHoachTheoLop($key)
        {
            $sql = "SELECT kehoachtheolop.*,tenchuyennganh,tenhedaotao,tenlop,hoten
            FROM  kehoachtheolop
            INNER JOIN  chuyennganh ON kehoachtheolop.machuyennganh = chuyennganh.machuyennganh
            LEFT JOIN   hedaotao  ON kehoachtheolop.mahedaotao= hedaotao.mahedaotao
            LEFT JOIN   lop  ON kehoachtheolop.malop= lop.malop
            LEFT JOIN admin ON  kehoachtheolop.nguoithaotac= admin.maGV
            WHERE makehoachtheolop LIKE'%$key%' OR  tenchuyennganh LIKE'%$key%' OR hoten LIKE'%$key%' OR tenhedaotao LIKE'%$key%'  OR tenlop LIKE'%$key%' OR namhoc LIKE'%$key%' 

            ";
            
           $query = $this ->db-> query($sql);
                       
            return $query->result();
        }


        public function viewChitietKeHoachLop($id , $hocky = "")
        {
             $sql = "SELECT chitietkehoachtheolop.*, monhoc.mamonhoc, tenmonhoc,soTCLT,soTCTH,TCM,monhoc.giaovien,chitietkehoachtheolop.hocky,hoten,chitietkehoachtheolop.created_at 
            FROM chitietkehoachtheolop
            INNER JOIN  kehoachtheolop ON chitietkehoachtheolop.makehoachtheolop = kehoachtheolop.makehoachtheolop 
            LEFT JOIN  lop  ON chitietkehoachtheolop.malop = lop.malop
            LEFT JOIN  monhoc ON chitietkehoachtheolop.mamonhoc = monhoc.mamonhoc
            LEFT JOIN admin ON  chitietkehoachtheolop.nguoithaotac= admin.maGV
            WHERE chitietkehoachtheolop.makehoachtheolop = '{$id}' ORDER BY chitietkehoachtheolop.hocky ASC
            ";
            
           $query = $this ->db-> query($sql);
                       
            return $query->result();
        }



        // laays ra danh sach quy dinh
        public function viewQuyDinh($start , $num , $key ='')
        {
            $sql = " SELECT quydinh.*  FROM quydinh INNER JOIN admin ON admin.maGV = quydinh.maGV WHERE maquydinh LIKE'%$key%' OR hoten LIKE'%$key%' ORDER BY quydinh.id DESC  LIMIT {$start},{$num} 
            ";

            $query = $this ->db-> query($sql);
                       
            return $query->result();
        }

        public function viewPhanCong($start , $num , $key ='')
        {
            $sql = " SELECT phancong.* , hoten  FROM phancong INNER JOIN admin ON admin.maGV = phancong.maGV WHERE  hoten LIKE'%$key%' ORDER BY phancong.id DESC  LIMIT {$start},{$num} 
            ";

            $query = $this ->db-> query($sql);
                       
            return $query->result();

        }

        // lấy ra dữ liệu danh sách các môn học trong bảng chi tiết kế hoạch theo lớp 
        /*
        @@ $lop mã của lớp cần lấy ra;
        @@ $học kỳ 
        @@ lấy ra tất cả các môn học có cùng mã lớp cùng học kỳ 
        */
        public function listMon($lop,$hocky)
        {
            $sql = " SELECT chitietkehoachtheolop.id , chitietkehoachtheolop.mamonhoc , tenmonhoc  FROM chitietkehoachtheolop  INNER JOIN monhoc  ON chitietkehoachtheolop.mamonhoc = monhoc.mamonhoc WHERE   chitietkehoachtheolop.malop = '{$lop}' AND chitietkehoachtheolop.hocky = '{$hocky}'
            ";

            $query = $this ->db-> query($sql);
                       
            return $query->result();

        }


        /*
        lấy ra danh sách giáo viên được phân công
         */
        
        public function getChiTietPhanCong($id)
        {
            $sql = " SELECT * FROM chitietphancong  
            INNER JOIN monhoc  ON chitietphancong.mamon = monhoc.mamonhoc 
            INNER JOIN lop ON chitietphancong.malop = lop.malop
            INNER JOIN admin ON chitietphancong.nguoithaotac = admin.maGV
            WHERE   maphancong =  {$id}
            ";

            $query = $this ->db-> query($sql);
                       
            return $query->result();
        }

        // lấy ra danh sách giáo viên phân công theo từng kỳ năm 
        public function getChiTietPhanCongs($id,$hocky="",$nam)
        {
            $sql = " SELECT * FROM chitietphancong  
            INNER JOIN monhoc  ON chitietphancong.mamon = monhoc.mamonhoc 
            INNER JOIN lop ON chitietphancong.malop = lop.malop
            INNER JOIN admin ON chitietphancong.nguoithaotac = admin.maGV
            WHERE   maphancong =  {$id} AND chitietphancong.hocky = {$hocky} AND chitietphancong.namhoc = '{$nam}'
            ";

            $query = $this ->db-> query($sql);
                       
            return $query->result();
        }


        public function getYear()
        {
            $sql = "SELECT DISTINCT namhoc FROM chitietphancong  ORDER BY namhoc  DESC ";

            $query = $this ->db-> query($sql);
                       
            return $query->result();
        }
       

        public function chiTiet($nam,$hocky)
        {
            $sql = "SELECT phancong.id, phancong.time ,phancong.maGV  ,phancong.created_at, admin.hoten  FROM phancong INNER  JOIN admin ON phancong.maGV = admin.maGV  WHERE phancong.namhoc = '{$nam}'AND phancong.hocky = {$hocky}  ";

            $query = $this ->db-> query($sql);
                       
            return $query->result();
        }



         // lấy ra danh sách giáo viên phân công theo từng kỳ năm 
        public function KeKhaiGioGiang($id,$nam)
        {
            $sql = " SELECT * FROM chitietphancong  
            INNER JOIN monhoc  ON chitietphancong.mamon = monhoc.mamonhoc 
            INNER JOIN phancong  ON chitietphancong.maphancong  = phancong.id
            INNER JOIN lop ON chitietphancong.malop = lop.malop
            INNER JOIN admin ON chitietphancong.nguoithaotac = admin.maGV
            WHERE   phancong.maGV =  {$id}  AND chitietphancong.namhoc = '{$nam}' ORDER BY chitietphancong.hocky ASC
            ";

            $query = $this ->db-> query($sql);
                       
            return $query->result();
        }


        public function KeKhaiGioGiangBM($bomon,$namhoc)
        {
            $sql = "SELECT * FROM kekhaigiogiangbomon
            INNER JOIN admin ON kekhaigiogiangbomon.idgv = admin.maGV
            WHERE kekhaigiogiangbomon.mabomon = '{$bomon}' AND kekhaigiogiangbomon.namhoc = '{$namhoc}'
            
             
             ";

             $query = $this ->db-> query($sql);
                       
            return $query->result();
        }



         public function KeKhaiGioGiangKhoa($khoa,$namhoc)
        {
            $sql = "SELECT * FROM kekhaigiogiangbomon
            INNER JOIN admin ON kekhaigiogiangbomon.idgv = admin.maGV
            WHERE kekhaigiogiangbomon.makhoa = '{$khoa}' AND kekhaigiogiangbomon.namhoc = '{$namhoc}'
            
             
             ";

             $query = $this ->db-> query($sql);
                       
            return $query->result();
        }


        public function QuyDoiHoatDongKhac($id,$nam,$maloaimon)
        {
            $sql = " SELECT * FROM chitietphancong  
            INNER JOIN monhoc  ON chitietphancong.mamon = monhoc.mamonhoc 
            INNER JOIN phancong  ON chitietphancong.maphancong  = phancong.id
            INNER JOIN lop ON chitietphancong.malop = lop.malop
            INNER JOIN admin ON chitietphancong.nguoithaotac = admin.maGV
            WHERE   phancong.maGV =  {$id}  AND chitietphancong.namhoc = '{$nam}' AND maloaimon ='$maloaimon' ORDER BY chitietphancong.hocky ASC
            ";

            $query = $this ->db-> query($sql);
                       
            return $query->result();
        }

        public function showKeHoachNgoaiKhoa(){
           $sql = " SELECT kehoachngoaikhoa.id ,hoten,tenlop,tenmonhoc,kehoachngoaikhoa.namhoc, kehoachngoaikhoa.hocky, kehoachngoaikhoa.created_at  FROM kehoachngoaikhoa
           INNER JOIN monhoc  ON kehoachngoaikhoa.mamon = monhoc.mamonhoc 
           INNER JOIN lop ON kehoachngoaikhoa.malop = lop.malop
           INNER JOIN admin ON kehoachngoaikhoa.magv = admin.maGV
           ORDER BY kehoachngoaikhoa.id DESC
             ";

            $query = $this ->db-> query($sql);
                       
            return $query->result();
        }

        
    }
?>