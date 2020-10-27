<?php
$logo = "Curriculum Vitae";

$navbar1 = "Home";
$navbar2 = "About";
$navbar3 = "Education";
$navbar4 = "Skills";
$navbar5 = "Hobby";

$bio1 = "Hello,";
$bio2 = "I'm Dwiki Aditama Supangkat";
$bio3 = "I'm Informatics Student";

$about1 = "About Me";
// $isiabout1 = "Hello, my name is Dwiki Aditama Supangkat. I'm usually called Diki, born in Jombang, May 1, 1999. I'm an Informatics student at a university in Surabaya. I am very interested in the IT world. That's why I'm majoring in Informatics at this time. Besides being interested in IT world, I'm also interested in the automotive.";
$about2 = "Basic Information";
// $isiabout2 = "Age : 21 Years <br>
// Email : dwikiaditamasupangkat@gmail.com <br>
// Phone : +6285804555646 <br>
// Adress : Kesamben, Kab. Jombang, Jawa Timur";

$p_logo = "P";
// $p_isi  = "Primary School in : <br>
// SDN Podoroto 1 <br> 
// 2005 until 2011 ";
$j_logo = "J";
// $j_isi = "Junior High School in : <br>
// SMPN 1 Kesamben <br>
// 2011 until 2014";
$s_logo = "S";
// $s_isi = "Senior High School in : <br>
// SMAN 3 Jombang <br>
// 2014 until 2017";
$u_logo = "U";
// $u_isi = 'University in : <br>
// UPN "Veteran" Jawa Timur <br>
// Informatics, 2018 until now';

// $skill1 = "C Programming";
// $skill2 = "Java Programming";
// $skill3 = "Adobe XD";
// $skill4 = "Database";

// $hobby1 = "Travelling";
// $hobby2 = "Swimming";
// $hobby3 = "Football";

$footer =  '~ created by Dwiki Aditama Supangkat - 18081010064 - Pemrograman Web(A) - Informatika - UPN "Veteran" Jawa Timur ~';

$url_logo = "img/logo.png";
$url_profil = "img/foto.png";
$url_about = "img/about.jpg";
$url_edu = "img/edu.jpg";
$url_skill = "img/skill.jpg";
$url_hobby = "img/hobby.jpg";
$url_hobby1 = "img/h1.jpg";
$url_hobby2 = "img/h2.jpg";
$url_hobby3 = "img/h3.jpg";
?>

<?php 
    include ('conn.php'); 

    $query_about = "SELECT * FROM about";
    $result_about = mysqli_query(connection(),$query_about); 
    $about_isi = mysqli_fetch_array($result_about);

    $query_edu = "SELECT * FROM education"; 
    $result_edu = mysqli_query(connection(),$query_edu); 
    $edu_isi = mysqli_fetch_array($result_edu);    

    $query_skills = "SELECT * FROM skills"; 
    $result_skills = mysqli_query(connection(),$query_skills); 
    $skills_isi = mysqli_fetch_array($result_skills);

    $query_hobby = "SELECT * FROM hobby"; 
    $result_hobby = mysqli_query(connection(),$query_hobby); 
    $hobby_isi = mysqli_fetch_array($result_hobby);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $logo?></title>
    <link rel="icon" type="image/png" href="<?php echo $url_logo?>">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/text.css">
    <link rel="stylesheet" href="css/960.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Faustina&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background">
        <div class="container_12">
            <header>
                <div class="grid_6">
                    <div class="logo"><?php echo $logo?></div>       
                </div>
                <div class="grid_6">
                    <div class="navigasi">
                        <button class="button" onclick= "window.scrollTo(0, 0)"><?php echo $navbar1?></button>
                        <button class="button" onclick= "window.scrollTo(0, 810)"><?php echo $navbar2?></button>
                        <button class="button" onclick= "window.scrollTo(0, 1500)"><?php echo $navbar3?></button>
                        <button class="button" onclick= "window.scrollTo(0, 2200)"><?php echo $navbar4?></button>
                        <button class="button" onclick= "window.scrollTo(0, 2200)"><?php echo $navbar5?></button>
                    </div>   
                </div>
                <div class="grid_6">
                    <img src="<?php echo $url_profil?>">
                </div>
                <div class="grid_6">
                    <h3><?php echo $bio1?>,</h3>
                    <h1><?php echo $bio2?></h1>
                    <h4><?php echo $bio3?></h2>
                </div>
            </header>
            <div class="about">
                <div class="grid_12">
                    <div class="about-bar">
                        <div class="grid_1">
                            <img src="<?php echo $url_about?>" title="<?php echo $navbar2?>">
                        </div>
                    </div>
                    <div class="batang1">
                        <div class="segitiga-atas-kiri-luar"></div>
                        <div class="segitiga-atas-kiri"></div>
                        <div class="bulatkecil-kiri"></div>
                        <div class="segitiga-text-kiri">
                            <p><?php echo $about1?></p>
                        </div>
                    </div>
                    <div class="kotak-about-luar"></div>
                    <div class="kotak-about">
                        <p><?php echo $about_isi['about_me'];?></p>
                    </div>
                    <div class="batang2">
                        <div class="segitiga-atas-kanan-luar"></div>
                        <div class="segitiga-atas-kanan"></div>
                        <div class="bulatkecil-kanan"></div>
                        <div class="segitiga-text-kanan">
                            <p><?php echo $about2?></p>
                        </div>
                    </div>
                    <div class="kotak-about2-luar"></div>
                    <div class="kotak-about2">
                        <p><?php echo $about_isi['basic_information'];?></p>
                    </div>
                </div>
            </div>
            <div class="edu">
                <div class="grid_12">
                    <div class="edu-bar">
                        <div class="grid_1">
                            <img src="<?php echo $url_edu?>" title="<?php echo $navbar3?>">
                        </div>
                    </div>
                    <div class="garis-tegak"></div>
                    <div class="garisP"></div>
                    <div class="grid_1">
                        <div class="P">
                            <div class="P-judul">
                            <?php echo $p_logo?>
                            </div>
                        </div>
                    </div>
                    <div class="grid_3">
                        <div class="box-P">
                            <p><?php echo $edu_isi['primary_school'];?></p>
                        </div>
                    </div>
                    <div class="garisJ"></div>
                    <div class="grid_1">
                        <div class="J">
                            <div class="J-judul">
                            <?php echo $j_logo?>
                            </div>
                        </div>
                    </div>
                    <div class="grid_3">
                        <div class="box-J">
                            <p><?php echo $edu_isi['junior_school'];?></p>
                        </div>
                    </div>
                    <div class="garisS"></div>
                    <div class="grid_1">
                        <div class="S">
                            <div class="S-judul">
                            <?php echo $s_logo?>
                            </div>
                        </div>
                    </div>
                    <div class="grid_3">
                        <div class="box-S">
                            <p><?php echo $edu_isi['senior_school'];?></p>
                        </div>
                    </div>
                    <div class="garisU"></div>
                    <div class="grid_1">
                        <div class="U">
                            <div class="U-judul">
                            <?php echo $u_logo?>
                            </div>
                        </div>
                    </div>
                    <div class="grid_3">
                        <div class="box-U">
                            <p><?php echo $edu_isi['university'];?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="skill">
                <div class="grid_7">
                    <div class="skill-bar">
                        <div class="grid_1">
                            <img src="<?php echo $url_skill?>" title="<?php echo $navbar4?>">
                        </div>
                    </div>
                    <div class="box-skill">
                        <div class="s1">
                            <p><?php echo $skills_isi['skill_1'];?></p> 
                            <div class="bar1"></div>
                            <div class="bar12"></div>
                        </div>
                        <div class="s2">
                            <p><?php echo $skills_isi['skill_2'];?></p> 
                            <div class="bar2"></div>
                            <div class="bar22"></div>
                        </div>
                        <div class="s3">
                            <p><?php echo $skills_isi['skill_3'];?></p> 
                            <div class="bar3"></div>
                            <div class="bar32"></div>
                        </div>
                        <div class="s4">
                            <p><?php echo $skills_isi['skill_4'];?></p> 
                            <div class="bar4"></div>
                            <div class="bar42"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hobby">
                <div class="grid_5">
                    <div class="hobby-bar">
                        <div class="grid_1">
                            <img src="<?php echo $url_hobby?>" title="<?php echo $navbar5?>">
                        </div>
                    </div>
                    <div class="grid_1">
                        <div class="hobby1">
                            <img src="<?php echo $url_hobby1?>" title="<?php echo $hobby_isi['hobby_1'];?>">
                        </div>
                        <div class="hobby2">
                            <img src="<?php echo $url_hobby2?>" title="<?php echo $hobby_isi['hobby_2'];?>"">
                        </div>
                        <div class="hobby3">
                            <img src="<?php echo $url_hobby3?>" title="<?php echo $hobby_isi['hobby_3'];?>"">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <marquee><?php echo $footer?></marquee>
        </div>
    </div>
</body>
</html>