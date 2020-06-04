
        <?php
	

require_once(__ROOT__ . "view/View.php");
class Register extends View{
	public function output(){
		
	}
       public function signup(){
        $str='<form action="login.php?action=insert" method="post">
               <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="fname" name="fname" value=""
                                        placeholder="First Name">
                                </div>
								<div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="lname" name="lname" value=""
                                        placeholder="Last Name" required="required">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="username" name="username" value=""
                                    required="required" placeholder="UserName">
                                </div>
								<div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="email" name="email" value=""
                                    required="required"  placeholder="Email" onKeyup=checkemail()>
                                    <div id="emailmsg"></div>
                                </div>
								<div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="number" name="number" value=""
                                    required="required"  placeholder="Phone Number">
                                </div>
								<div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="add" name="add" value=""
                                    required="required" placeholder="Address">
                                </div>
								<div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value=""
                                    required="required" placeholder="Password">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    
										<input type="password" class="form-control" id="confirm_password" name="confirm_password" value=""
                                        required="required" placeholder="Confirm your Password">
                                        </div>
                                       
                                <div class="col-md-12 form-group">
                                    
                                <input type="submit" /></div>
                                    </form>';
 return $str;
 
}
public function login(){
       $str='<form action="login.php?action=login" method="post">
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="username" name="username" value=""
                                        placeholder="Username" required="required">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value=""
                                        placeholder="Password" required="required">
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Remember me</label>
                                    </div>
                                    <div class="col-md-12 form-group">

                                    <input type="submit" name="login" ></div>

                                    <a class="lost_pass" href="login_managment.php">Are you an employee?<br>CLICK HERE</a>
                                </div>
                            </form>';
    return $str;
}

public function login_employee(){
    $str='<form action="login.php?action=login" method="post">
                             <div class="col-md-12 form-group p_star">
                                 <input type="text" class="form-control" id="username" name="username" value=""
                                     placeholder="Username" required="required">
                             </div>
                             <div class="col-md-12 form-group p_star">
                                 <input type="password" class="form-control" id="password" name="password" value=""
                                     placeholder="Password" required="required">
                             </div>
                             <div class="col-md-12 form-group">
                                 <div class="creat_account d-flex align-items-center">
                                     <input type="checkbox" id="f-option" name="selector">
                                     <label for="f-option">Remember me</label>
                                 </div>
                                 <div class="col-md-12 form-group">

                                 <input type="submit" name="login_employee" ></div>

                                 <a class="lost_pass" href="login.php">Are you customer?<br>CLICK HERE</a>
                             </div>
                         </form>';
 return $str;
}

public function feature()
{
$str='
    <section class="feature_part section_padding">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <div class="feature_part_tittle">
                    <h3>Credibly innovate granular
                    internal or organic sources
                    whereas standards.</h3>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="feature_part_content">
                    <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="../img/icon/feature_icon_1.svg" alt="#">
                    <h4>Credit Card Support</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="../img/icon/feature_icon_2.svg" alt="#">
                    <h4>Online Order</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="../img/icon/feature_icon_3.svg" alt="#">
                    <h4>Free Delivery</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_feature_part">
                    <img src="../img/icon/feature_icon_4.svg" alt="#">
                    <h4>Product with Gift</h4>
                </div>
            </div>
        </div>
    </div>
</section>';
return $str;

}
}
?>       
