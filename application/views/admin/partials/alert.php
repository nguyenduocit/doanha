<?php 

    if(($this->session->flashdata('success')))
    {
         echo "<div class='alert alert-success customalert' id='alertjs'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                ".$this->session->flashdata('success')."
            </div>";

    }

    if(($this->session->flashdata('error')))
    {
        echo "<div class='alert alert-danger customalert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                ".$this->session->flashdata('error')."
            </div>";

    }

 ?>