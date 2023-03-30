<?php include('header.php');?>




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
   
}
p{
    font-family: 'Sniglet', cursive;
}
html{
    scroll-behavior: smooth;
}
.about{
    display: inline-block;
    background: whitesmoke;
    cursor: pointer;
    color: black;
}
.left :hover{
    transform: scale(1.1);
}
.about .about-content{
    
    display: flex;
    align-items: center;
    margin-left: 30px;
    margin-right: -10px;
    flex-wrap: wrap;
    justify-content: space-between;

}
.about .about-content .left img{
    height: 400px;
    width: 400px;
    margin-top: 70px;
    margin-left: 150px;
    margin-bottom: 40px;
    object-fit: cover;
    border-radius: 6px;
}
.about .about-content .left{
    width: 50%;
}
.about .about-content .right{
    width: 45%;
}
.about .about-content .text{
    font-size: 40px;
    margin-bottom: 30px;
}

.about .about-content .right p{
    font-size: 20px;
    margin-left: 0px;
    margin-right: 80px;
    text-align: justify;

}
.about .about-content .column{
    width: 50%;
}
.column span{
    color: crimson;
}
.line{
    height: 3px;
    width:100%;
    background: black;
    position: relative;
}
.icon{
    margin-top: 30px;
    font-size: 30px;
}
i:hover{
    transform: scale(1.35);
}
i{
    margin-right: 20px;
    color: black;
}
</style>
<body>
    <section class="about">
        <div class="about-content">
            <div class="column left">
                <img src="all_photos1/isha2.png" alt="">
            </div> 
            <div class="column right">
                <div class="text">I'm <span>Isha</span> </div>
                <p> &nbsp;&nbsp;&nbsp;Hello, I am Isha . I am a Computer Engineer. I 
                    am a junior associate Graphic Designer at Sports Club DDU.
                    I Like to work with websites. I am quite good at Front end and I am getting my 
                    hands on Back hand as well.
                </p>
                <div class="icon">
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
            
        </div>
        <div class="line"></div>
        <div class="about-content">
            <div class="column left">
                <img src="all_photos1/laxita.png" alt="">
            </div> 
            <div class="column right">
                <div class="text">I'm <span>Laxita</span> </div>
                <p>&nbsp;&nbsp;&nbsp;Hello! I am LAXITA. Currently, I pursing my b-tech degree from Dharmsinh Desai University.I like to make different types of websites. In website,I like to work upon Front-end and i also learn back-end as well.</p>
                <div class="icon">
                    <a href="https://www.instagram.com/laxita_128/"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/laxita-sojitra-32947a239?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BWga3VFTATau%2B1CLQzDpFFg%3D%3D"><i class="fa fa-linkedin"></i></a>
                    <a href="https://github.com/Laxitasojitra"><i class="fa fa-github"></i></a>
                    <a href="https://twitter.com/Laxita_sojitra"><i class="fa fa-twitter"></i></a>
                    </div>
            </div>
            
        </div>
        <div class="line"></div>
        <div class="about-content">
            <div class="column left">
                <img src="all_photos1/manthan.png" alt="">
            </div> 
            <div class="column right">
                <div class="text">I'm <span>Manthan</span> </div>
                <p>I am Manthan!I am First year student of Dharamsinh Desai University (DDU). I am doing Computer Engineering in this college. I am glad to take admission in DDU. I like to do something creative everyday. And also like to work upon back-end.</p>
                <div class="icon">
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
            </div>
            
        </div>
        <div class="line"></div>
        <div class="about-content">
            <div class="column left">
                <img src="all_photos1/myphoto.png" alt="">
            </div> 
            <div class="column right">
                <div class="text">I'm <span>Priya</span> </div>
                <p>I am Priya!I am student of Computer Engineering . I am pursuing my B.Tech degree from Dharamsinh Desai University . I am front end developer. And I am good in CSS,but not in Java script. And also I'm trying to learn JavaScript as well as php and bootstrap.</p>
                <div class="icon">
                    <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/feed/?trk=guest_homepage-basic_nav-header"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
            </div> 
        </div>
    </section>
</body>
</html>

