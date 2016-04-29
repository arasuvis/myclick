<center><h1>HI FILE IS WORKING</h1>

<?php
if(!empty($authUrl)) {
    echo '<a href="'.$authUrl.'"><img src="'.base_url().'images/glogin.png" alt=""/></a>';
}else{

?>
<div class="wrapper">
    <h1>Google Profile Details </h1>
    <?php
    echo '<div class="welcome_txt">Welcome <b>'.$userData['fname'].'</b></div>';
    echo '<div class="google_box">';
    echo '<p class="image"><img src="'.$userData['picture'].'" alt="" width="300" height="220"/></p>';
    echo '<p><b>Google ID : </b>' . $userData['oauth_uid'].'</p>';
    echo '<p><b>Name : </b>' . $userData['fname'].' '.$userData['lname'].'</p>';
    echo '<p><b>Email : </b>' . $userData['email'].'</p>';
    echo '<p><b>Gender : </b>' . $userData['gender'].'</p>';
    echo '<p><b>Locale : </b>' . $userData['locale'].'</p>';
    echo '<p><b>Google+ Link : </b>' . $userData['gpluslink'].'</p>';
    echo '<p><b>You are login with : </b>Google</p>';
    echo '<p><b>Logout from <a href="'.base_url().'user_authentication/logout">Google</a></b></p>';
    echo '</div>';
    ?>
</div>
<?php } ?></center>