<?php require_once("must_login.php");
    require_once("entities/customer.class.php");
    require_once("entities/account.class.php");
    require_once("entities/contract.class.php");
?>

<?php 
    $account_present = Account::get_account($_COOKIE["account_present_MATK"]);
    $account_present = reset($account_present);

    $customer_present = Customer::get_customer($account_present["MAKH"]);
    $customer_present = reset($customer_present);

    $lstHD = Contract::toList_byMATK($account_present["MATK"]);

?>

<?php 
    include_once("header.php");
    

    
    include_once("menu.php");
    
?>


<div class="container tt">
<div>
    <div class="main">
        <div class="topbar_">
        	<a href=""> Đổi mật khẩu</a>
        </div>
        <div class="row">
            <div class="col-md-4 mt-1">
                <div class="card text-center sidebar">
                    <div class="card-body ">
                        <img src="./images/user.png" alt="" class="" width="150">
                        <div class="mt-3">
                            <h4><?php echo $account_present["TENTK"]; ?></h4>
                            <a href="">Số xe đã đăng: <?php echo count($lstHD) ?></a>
                                <div class="edit-tt"> <a href="edit_account_current.php"><i class="far fa-edit"></i> Chỉnh sửa thông tin</a></div>
                                <div class="edit-tt"> <a href="contract_list.php?&MATK=<?php echo $account_present["MATK"] ?>"><i class="far fa-edit"></i> Danh sách xe đăng ký bán</a></div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 content">
                    <h1 class="m-3">Thông tin khác</h1>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <h4 style="font-weight:bold">Lịch sử bình luận</h4>
                            </div>
                            <div class="col-md-5 text-secondary">
                                <a href="comment_of_user.php?&MATK=<?php echo $account_present["MATK"] ?>"> Xem thêm</a> <br />

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-7">
                                <h4 style="font-weight:bold">Lịch sử giao dịch</h4>
                            </div>
                            <div class="col-md-5 text-secondary">
                                <a href="contract_list.php?&MATK_Done=<?php echo $account_present["MATK"] ?>"> Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-8 mt-1">
                <div class="card mb-3 content">
                    <h1 class="m-3 pt-3"> Thông tin chi tiết</h1>
                    <div class="card-body">
                        
                            <div class="row">
                                <div class="col-md-3">
                                    <h4 style="font-weight:bold">Họ Tên</h4>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <?php echo $customer_present["TENKH"]; ?>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-3">
                                    <h4 style="font-weight:bold">Số điện thoại</h4>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <?php echo $customer_present["SDT"]; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h4 style="font-weight:bold">Giới tính</h4>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <?php echo $customer_present["GIOITINH"]; ?>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-3">
                                    <h4 style="font-weight:bold">Trạng thái</h4>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <?php echo $account_present["TRANGTHAI"]; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <h4 style="font-weight:bold">Email</h4>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <?php echo $customer_present["EMAIL"]; ?>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-3">
                                    <h4 style="font-weight:bold">CMND</h4>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <?php echo $customer_present["CMND"]; ?>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-3">
                                    <h4 style="font-weight:bold">Địa chỉ</h4>
                                </div>
                                <div class="col-md-9 text-secondary">
                                    <?php echo $customer_present["DIACHI"]; ?>
                                </div>
                            </div>
							<hr>
							<hr>
							<hr>
                        
                        

                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
</div>

<?php include_once("footer.php"); ?>