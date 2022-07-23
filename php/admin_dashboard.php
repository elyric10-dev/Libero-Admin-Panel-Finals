<?php
session_start();
if(!isset($_SESSION['email'])){
    header('Location: ../index.php');
}
include '../connection.php';
//10 RECENT USER DETAILS
$get_details = "SELECT * FROM `details` WHERE 1 ORDER BY `id` DESC LIMIT 10";
$get_details_query = mysqli_query($connect, $get_details);

$get_details_query_now = mysqli_fetch_all($get_details_query,MYSQLI_BOTH);

//10 RECENT REGISTERED USER
$get_users = "SELECT * FROM `users` WHERE 1 ORDER BY `id` DESC LIMIT 10";
$get_users_query = mysqli_query($connect, $get_users);

$get_users_query_now = mysqli_fetch_all($get_users_query,MYSQLI_BOTH);

//




//ALL USER DETAILS
$get_all_details = "SELECT * FROM `details` WHERE 1";
$get_all_details_query = mysqli_query($connect, $get_all_details);

$get_all_details_query_now = mysqli_fetch_all($get_all_details_query,MYSQLI_BOTH);

//ALL REGISTERED USER
$get_all_users = "SELECT * FROM `users` WHERE 1";
$get_all_users_query = mysqli_query($connect, $get_all_users);

$get_all_users_query_now = mysqli_fetch_all($get_all_users_query,MYSQLI_BOTH);

$decrypted_password = "";
echo $decrypted_password;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libero Admin Dashboard</title>
    <script src="../assets/js/admin.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>

<body>
    <div class="container">
        <div class="navigation">
            <div class="ul_relative"></div>
            <ul class="ul">
                <div class="hide_ul">
                    <ion-icon name="chevron-back-circle-outline"></ion-icon>
                </div>
                <div class="show_ul">
                    <ion-icon name="chevron-forward-circle-outline"></ion-icon>
                </div>
                <li>
                    <div class="menu_title two"><a href="#">HOME</a></div>
                    <div class="icon_image one">
                        <ion-icon name="home-outline"></ion-icon>
                    </div>
                </li>
                <li>
                    <div class="menu_title four"><a href="#">ALL&nbsp;USERS</a></div>
                    <div class="icon_image three">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </li>
                <li>
                    <div class="menu_title six"><a href="#">OTHERS</a></div>
                    <div class="icon_image five">
                        <ion-icon name="happy-outline"></ion-icon>
                    </div>
                </li>
            </ul>

            <div class="home_container">
                <div class="header_container" id="starting_position">
                    <div class="logo_container">
                        <img src="../assets/images/libero_blue.png" alt="logo">
                    </div>
                    <div class="profile_container">
                        <span class="show_hide_profile"><ion-icon name="person-circle-outline"></ion-icon></span>
                    </div>
                </div>
                <div class="header_content_container">

                    <div class="profile_contents">
                        <ul class="profile_ul">
                            <div class="name">Elyric Admin</div>
                            <!-- <li class="profile_li"><span class="profile_icon white"><ion-icon name="person-circle-outline"></ion-icon></span><a href="#" class="profile_label">Profile</a></li>
                            <li class="profile_li"><span class="profile_icon white"><ion-icon name="settings-outline"></ion-icon></span><a href="#" class="profile_label">Settings</a></li> -->
                            <li class="profile_li"><span class="profile_icon white"><ion-icon name="log-out-outline"></ion-icon></span><a href="logout.php" class="profile_label">Logout</a></li>
                        </ul>
                    </div>
                    <!-- HOMEPAGE CONTENTS CONTAINER -->
                    <div class="home_content_container">
                        <div class="greet_container">
                            <span class="greet_text">Welcome back <p class="admin_name"><?php echo $_SESSION['email'] ?></p></span>
                            <h2 class="page_name">Homepage</h2>
                        </div>
                        <div class="database_container">
                            <div class="database_title"><span>Recent Users</span></div>
                            <div class="home_database_width_limiter">
                                <div class="database_table_container">
                                    <div class="home_table_header">
                                        <span>No.</span>
                                        <span>Fullname</span>
                                        <span>Email Address</span>
                                        <span>Timestamp</span>
                                    </div>
                                    <?php
                                        for($i=1;$i<=count($get_details_query_now);$i++){
                                            echo '
                                            <div class="home_table_data"><span>'.$i.'</span><span>'.$get_details_query_now[-1+$i][1].'</span><span>'.$get_users_query_now[-1+$i][1].'</span><span class="time">'.$get_details_query_now[-1+$i][6].'<b class="date_line"></b>'.$get_details_query_now[-1+$i][5].' am</span></div>';
                                        }
                                        ?>
                                        
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ALL USERS CONTENTS CONTAINER -->
                    <div class="users_content_container active">
                        <div class="greet_container">
                            <h2 class="page_name">All Registered Users</h2>
                            
                        
                        </div>
                        <div class="database_container" id="database_focus">
                            <div class="database_title"><span>Users Database</span></div>
                            <div class="database_width_limiter">
                                <div class="database_table_container">
                                    <div class="table_header">
                                        
                                    <!-- Creating Database Table HEADER -->
                                        <span>ID no.</span>
                                        <span>Fullname</span>
                                        <span>Postcode</span>
                                        <span>Selected</span>
                                        <span>Email Address</span>
                                        <span>MD5 Password</span>
                                        <span>Date Registered</span>
                                        <span>Options</span>
                                    </div>
                                    <?php
                                    //Creating Database Table DATA
                                        for($i=0;$i<count($get_all_users_query_now);$i++){
                                            echo '

                                            
                                            <div class="table_data">
                                            
                                                <span id="option_id">'.$get_all_users_query_now[$i]['id'].'</span>
                                                <span>'.$get_all_details_query_now[$i]['fullname'].'</span>
                                                <span>'.$get_all_details_query_now[$i]['postcode'].'</span>
                                                <span>'.$get_all_details_query_now[$i]['selection'].'</span>
                                                <span>'.$get_all_users_query_now[$i]['email'].'</span>
                                                <span>'.$get_all_users_query_now[$i]['password'].'</span>
                                                <span>'.$get_all_details_query_now[$i]['date'].'<b class="date_line"></b>   '.$get_all_details_query_now[$i]['time'].'</span>
                                                    '; ?><div class="table_settings table_settings<?php echo $i; ?>">
                                                            <a href="#database_focus" class="decrypt_clicked<?php echo $i; ?>">Decrypt Password</a>
                                                            <!-- <a href="edit_user.php">Edit</a> -->
                                                            
                                                            <form method="POST" action="delete_user.php" class="show_alert<?php echo $i; ?>">
                                                                <input type="text" name="id_value" hidden value="<?php echo $get_all_users_query_now[$i]['id'] ?>">
                                                                <span class="open_alert<?php echo $i; ?>" >Delete</span>
                                                                
                                                                <div class="alert_message_container alert_message_container<?php echo $i; ?>">
                                                                    <div class="alert_messages">
                                                                        <p>Do you want delete? This can't be undone</p>
                                                                        <div class="delete_alert_message">
                                                                            <button type="submit" name="submit_id" value="<?php $get_all_users_query_now[$i]['id'] ?>" class="yes_alert_button">Yes</button>
                                                                            <a href="#" class="no_alert_button<?php echo $i; ?>">No</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <script>
                                                                //Opening Yes or No for password deleting
                                                                const open_alert<?php echo $i; ?> = document.querySelector('.open_alert<?php echo $i; ?>')
                                                                const no_alert_button<?php echo $i; ?> = document.querySelector('.no_alert_button<?php echo $i; ?>')
                                                                const alert_message_container<?php echo $i; ?> = document.querySelector('.alert_message_container<?php echo $i; ?>')
                                                                open_alert<?php echo $i; ?>.addEventListener('click', ()=>{
                                                                alert_message_container<?php echo $i; ?>.classList.add('active')
                                                                })
                                                                no_alert_button<?php echo $i; ?>.addEventListener('click', ()=>{
                                                                    
                                                                alert_message_container<?php echo $i; ?>.classList.remove('active')
                                                                })
                                                            </script>
                                                            </form>
                                                            
                                                            
                                                    </div>
                                                    <span class="table_settings_icon table_settings_icon<?php echo $i; ?>"><ion-icon name="ellipsis-vertical-outline"></ion-icon></span>
                                                    <script>

                                                        const table_settings<?php echo $i; ?> = document.querySelector('.table_settings<?php echo $i; ?>')
                                                        const table_settings_icon<?php echo $i; ?> = document.querySelector('.table_settings_icon<?php echo $i; ?>')
                                                        //Click Option icon to open Option Panel
                                                        table_settings_icon<?php echo $i; ?>.addEventListener('click', ()=>{
                                                            const table_header = document.querySelectorAll('.table_header')
                                                            const table_data = document.querySelectorAll('.table_data')
                                                            table_settings<?php echo $i; ?>.classList.contains('active')?table_settings<?php echo $i; ?>.classList.remove('active'):table_settings<?php echo $i; ?>.classList.add('active')
                                                            table_settings<?php echo $i; ?>.classList.contains('active')?table_settings<?php echo $i; ?>.style.display="flex":table_settings<?php echo $i; ?>.style.display="none"


                                                            
                                                        })
                                                        
                                                    </script>
                                            </div>
                                            <?php
                                            ?>
                                                    <!-- Encrypt Password -->
                                                    <div class="decrypted_password_container decrypted_password_container<?php echo $i ?>">
                                                        <div class="decrypted_password decrypted_password<?php echo $i ?>"><input type="text" value="<?php echo $get_all_users_query_now[$i]['decrypt_password']?>" id="decrypted_password<?php echo $i ?>"></div>
                                                        <div class="copy_decrypted_pass copy_decrypted_pass<?php echo $i ?>">Copy</div>
                                                    </div>
                                                    <script>
                                                        // Fake Password Decryption
                                                        const decrypted_password_container<?php echo $i; ?> = document.querySelector('.decrypted_password_container<?php echo $i; ?>')
                                                        const decrypt_clicked<?php echo $i; ?> = document.querySelector('.decrypt_clicked<?php echo $i; ?>').addEventListener('click', ()=>{
                                                        decrypted_password_container<?php echo $i; ?>.classList.add('active')
                                                        
                                                        decrypted_password_container<?php echo $i; ?>.addEventListener('click', ()=>{
                                                            decrypted_password_container<?php echo $i; ?>.classList.remove('active')
                                                        })
                                                        })

                                                        //Copy Decrypted Password
                                                        const decrypted_password<?php echo $i ?> = document.getElementById('decrypted_password<?php echo $i ?>')
                                                        const copy_decrypted_pass<?php echo $i ?> = document.querySelector('.copy_decrypted_pass<?php echo $i ?>')

                                                        copy_decrypted_pass<?php echo $i ?>.addEventListener('click', ()=>{
                                                            decrypted_password<?php echo $i ?>.select()
                                                            decrypted_password<?php echo $i ?>.setSelectionRange(0, 99999)
                                                            navigator.clipboard.writeText(decrypted_password<?php echo $i ?>.value)
                                                        })
                                                    </script>
                                        <?php
                                        }
                                    ?>
                                    
                                </div>
                            </div>
                            <div class="buttons_container">
                                <div class="show_all_users_container">
                                    <div class="show_all_users"><a href="#starting_position"><span>↥ Go up ↥</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                    
        </div>
        <div class="fullscreen_user_option_container_absolute">
            <div class="fullscreen_user_option_container_relative">
                
            <div class="option_container">
                                        <div class="option_button"><span>Option</span><div class="option_close_img"><ion-icon name="close-circle-outline"></ion-icon></div></div>
                                        <div class="option_border"><a href="https://www.cmd5.org/" target="_blank" style="text-decoration: none; color: rgba(0,0,0,1);" class="copy_pass">Decrypt Password</a></div>
                                        <div class="option_border">Edit</div>
                                        <button type="submit" class="option_border">Delete</button>
                                        <div class="option_border">See Details</div>
                                    </div>
            </div>
        </div>
    </div>


</body>

</html>