<?php

class person{
    public $name;
    public $adress;
    public $email;
    public $sdt;
    public function __construct($name,$adress, $email,$sdt,)
    {
        $this->name=$name;
        $this->adress=$adress;
        $this->email=$email;
        $this->sdt=$sdt;
    }
}
class nv extends person{
    public $critical;
    public function __construct($name,$adress, $email,$sdt,$critical){
        $this->name=$name;
        $this->adress=$adress;
        $this->email=$email;
        $this->sdt=$sdt;
       $this->critical=$critical;
    }
    public function intro1(){
        echo "ten:{$this->name}<br/> địa chỉ:{$this->adress}<br/>email:{$this->email}<br/>sđt:{$this->sdt}<br/>critical:{$this->critical}.<br/>";
    }

}



class kh extends person{
    public $loaikhachhang;
    public function __construct($name,$adress, $email,$sdt,$loaikhachhang){
        $this->name=$name;
        $this->adress=$adress;
        $this->email=$email;
        $this->sdt=$sdt;
        $this->loaikhachhang=$loaikhachhang;
    }
    public function intro(){
        echo "ten:{$this->name}<br/> địa chỉ:{$this->adress}<br/>email:{$this->email}<br/>sđt:{$this->sdt}<br/>loaikhachhang:{$this->loaikhachhang}.";
    }
}
echo "nhân viên <br>";
$nv= new nv("van di","quangtri","di.@gmail.com","03445","yếu");
$nv->intro1();
echo "<br>";
echo"khách hàng <br>";
$kh= new kh("quang","101b","@gmail.com","0399","không vip");
$kh->intro();

?>