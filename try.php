<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      /*timeline*/

a {
    text-decoration: none
}





/*timeline3*/


/******************* Timeline Demo - 5 *****************/

.main-timeline3 {
    overflow: hidden;
    position: relative
}

.main-timeline3 .timeline {
    position: relative;
    margin-top: -79px
}

.main-timeline3 .timeline:first-child {
    margin-top: 0
}

.main-timeline3 .timeline-icon,
.main-timeline3 .year {
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0
}

.main-timeline3 .timeline:after,
.main-timeline3 .timeline:before {
    content: "";
    display: block;
    width: 100%;
    clear: both
}

.main-timeline3 .timeline:before {
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2
}

.main-timeline3 .timeline-icon {
    width: 210px;
    height: 210px;
    border-radius: 50%;
    border: 25px solid transparent;
    border-top-color: #f44556;
    border-right-color: #f44556;
    z-index: 1;
    transform: rotate(45deg)
}

.main-timeline3 .year {
    display: block;
    width: 110px;
    height: 110px;
    line-height: 110px;
    border-radius: 50%;
    background: #fff;
    box-shadow: 0 0 20px rgba(0, 0, 0, .4);
    font-size: 30px;
    font-weight: 700;
    color: #f44556;
    text-align: center;
    transform: rotate(-45deg)
}

.main-timeline3 .timeline-content {
    width: 35%;
    float: right;
    background: #f44556;
    padding: 30px 20px;
    margin-left: 10px;
    margin: 50px 0;
    box-shadow: 0 10px 25px -10px rgba(72, 29, 99, .3);
    z-index: 1;
    position: relative
}

.main-timeline3 .timeline-content:before {
    content: "";
    width: 20%;
    height: 15px;
    background: #f44556;
    position: absolute;
    top: 50%;
    left: -20%;
    z-index: -1;
    transform: translateY(-50%)
}

.main-timeline3 .title {
    font-size: 20px;
    font-weight: 700;
    color: #fff;
    margin: 0 0 10px
}

.main-timeline3 .description {
    font-size: 16px;
    color: #fff;
    line-height: 24px;
    margin: 0
}

.main-timeline3 .timeline:nth-child(2n) .timeline-icon {
    transform: rotate(-135deg);
    border-top-color: #e97e2e;
    border-right-color: #e97e2e
}

.main-timeline3 .timeline:nth-child(2n) .year {
    transform: rotate(135deg);
    color: #e97e2e
}

.main-timeline3 .timeline:nth-child(2n) .timeline-content {
    float: left
}

.main-timeline3 .timeline:nth-child(2n) .timeline-content:before {
    left: auto;
    right: -20%
}

.main-timeline3 .timeline:nth-child(2n) .timeline-content,
.main-timeline3 .timeline:nth-child(2n) .timeline-content:before {
    background: #e97e2e
}

.main-timeline3 .timeline:nth-child(3n) .timeline-icon {
    border-top-color: #13afae;
    border-right-color: #13afae
}

.main-timeline3 .timeline:nth-child(3n) .year {
    color: #13afae
}

.main-timeline3 .timeline:nth-child(3n) .timeline-content,
.main-timeline3 .timeline:nth-child(3n) .timeline-content:before {
    background: #13afae
}

.main-timeline3 .timeline:nth-child(4n) .timeline-icon {
    border-top-color: #105572;
    border-right-color: #105572
}

.main-timeline3 .timeline:nth-child(4n) .year {
    color: #105572
}

.main-timeline3 .timeline:nth-child(4n) .timeline-content,
.main-timeline3 .timeline:nth-child(4n) .timeline-content:before {
    background: #105572
}

@media only screen and (max-width:1199px) {
    .main-timeline3 .timeline {
        margin-top: -103px
    }
    .main-timeline3 .timeline-content:before {
        left: -18%
    }
    .main-timeline3 .timeline:nth-child(2n) .timeline-content:before {
        right: -18%
    }
}

@media only screen and (max-width:990px) {
    .main-timeline3 .timeline {
        margin-top: -127px
    }
    .main-timeline3 .timeline-content:before {
        left: -2%
    }
    .main-timeline3 .timeline:nth-child(2n) .timeline-content:before {
        right: -2%
    }
}

@media only screen and (max-width:767px) {
    .main-timeline3 .timeline {
        margin-top: 0;
        overflow: hidden
    }
    .main-timeline3 .timeline:before,
    .main-timeline3 .timeline:nth-child(2n):before {
        box-shadow: none
    }
    .main-timeline3 .timeline-icon,
    .main-timeline3 .timeline:nth-child(2n) .timeline-icon {
        margin-top: -30px;
        margin-bottom: 20px;
        position: relative;
        transform: rotate(135deg)
    }
    .main-timeline3 .timeline:nth-child(2n) .year,
    .main-timeline3 .year {
        transform: rotate(-135deg)
    }
    .main-timeline3 .timeline-content,
    .main-timeline3 .timeline:nth-child(2n) .timeline-content {
        width: 100%;
        float: none;
        border-radius: 0 0 20px 20px;
        text-align: center;
        padding: 25px 20px;
        margin: 0 auto
    }
    .main-timeline3 .timeline-content:before,
    .main-timeline3 .timeline:nth-child(2n) .timeline-content:before {
        width: 15px;
        height: 25px;
        position: absolute;
        top: -22px;
        left: 50%;
        z-index: -1;
        transform: translate(-50%, 0)
    }
}





/*end timeline*/
    
    </style>
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="try.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    

      <div class="container">
    <div class="main-timeline3">
              <div class="timeline animate__animated animate__fadeInUp"  onclick="window.location.href='add-teacher.php';" style="cursor: pointer;" >
                <div class="timeline-icon"><span class="year"><img src="images/teacher.png"  alt="add-student"    height="70px"  width="70px;" style="margin-top:-15px"></span></div>
                    <div class="timeline-content">
                      <h3 class="title">Manage teacher </h3>
                      <p class="description">
                        Review the details of teachers involved in the school.         
                      </p>
                    </div>
              </div>

              
              <div class="timeline animate__animated animate__fadeInUp"  onclick="window.location.href='teacherlist.php';" style="cursor: pointer;" >
                <div class="timeline-icon"><span class="year"><img src="images/teacher.png"  alt="add-student" height="70px"  width="70px;" style="margin-top:-15px"></span></div>
                    <div class="timeline-content">
                      <h3 class="title">Manage teacher </h3>
                      <p class="description">
                        Review the details of teachers involved in the school.         
                      </p>
                    </div>
              </div>
              
              <div class="timeline animate__animated animate__fadeInUp"  onclick="window.location.href='view-skill.php?course=fp';" style="cursor: pointer;" >
          <div class="timeline-icon"><span class="year">FP</span></div>
              <div class="timeline-content">
              <h3 class="title">Food Production , Tourism </h3>
              <p class="description">
                <b> For -  VI to XII </b><br>
                  Food Production &  Tourism education provides<a href='view-skill.php?course=fp' class='btn btn-sm bg_color_blue'>Read More..</a>        </p>
              </div>
          </div>
              <div class="timeline animate__animated animate__fadeInUp"  onclick="window.location.href='view-skill.php?course=bw';" style="cursor: pointer;" >
          <div class="timeline-icon"><span class="year">BW</span></div>
              <div class="timeline-content">
              <h3 class="title">Beauty & Wellness </h3>
              <p class="description">
                <b> For -  VI to XII </b><br>
                  Beauty and Wellness education provides<a href='view-skill.php?course=bw' class='btn btn-sm bg_color_blue'>Read More..</a>        </p>
              </div>
          </div>
              <div class="timeline animate__animated animate__fadeInUp"  onclick="window.location.href='view-skill.php?course=fs';" style="cursor: pointer;" >
          <div class="timeline-icon"><span class="year">FS</span></div>
              <div class="timeline-content">
              <h3 class="title">Fashion Studies </h3>
              <p class="description">
                <b> For -  XI to XII </b><br>
                  Fashion Studies education provides<a href='view-skill.php?course=fs' class='btn btn-sm bg_color_blue'>Read More..</a>        </p>
              </div>
          </div>
              <div class="timeline animate__animated animate__fadeInUp"  onclick="window.location.href='view-skill.php?course=ai';" style="cursor: pointer;" >
          <div class="timeline-icon"><span class="year">AI</span></div>
              <div class="timeline-content">
              <h3 class="title">Artificial Intelligence </h3>
              <p class="description">
                <b> For -  VI to XII </b><br>
                  Artificial Intelligence education provides<a href='view-skill.php?course=ai' class='btn btn-sm bg_color_blue'>Read More..</a>        </p>
              </div>
          </div>
              <div class="timeline animate__animated animate__fadeInUp"  onclick="window.location.href='view-skill.php?course=it';" style="cursor: pointer;" >
          <div class="timeline-icon"><span class="year">IT</span></div>
              <div class="timeline-content">
              <h3 class="title">Information Technology </h3>
              <p class="description">
                <b> For -  VI to X </b><br>
                  Information Technology education provides<a href='view-skill.php?course=it' class='btn btn-sm bg_color_blue'>Read More..</a>        </p>
              </div>
          </div>
              <div class="timeline animate__animated animate__fadeInUp"  onclick="window.location.href='view-skill.php?course=dt';" style="cursor: pointer;" >
          <div class="timeline-icon"><span class="year">DT</span></div>
              <div class="timeline-content">
              <h3 class="title">Design Thinking </h3>
              <p class="description">
                <b> For -  VI to X </b><br>
                  Design Thinking education provides<a href='view-skill.php?course=dt' class='btn btn-sm bg_color_blue'>Read More..</a>        </p>
              </div>
          </div>
              <div class="timeline animate__animated animate__fadeInUp"  onclick="window.location.href='view-skill.php?course=hc';" style="cursor: pointer;" >
          <div class="timeline-icon"><span class="year">HC</span></div>
              <div class="timeline-content">
              <h3 class="title">Handicrafts </h3>
              <p class="description">
                <b> For -  VI to VIII </b><br>
                  Handicrafts education provides<a href='view-skill.php?course=hc' class='btn btn-sm bg_color_blue'>Read More..</a>        </p>
              </div>
          </div>
              <div class="timeline animate__animated animate__fadeInUp"  onclick="window.location.href='view-skill.php?course=mkt';" style="cursor: pointer;" >
          <div class="timeline-icon"><span class="year">MKT</span></div>
              <div class="timeline-content">
              <h3 class="title">Marketing </h3>
              <p class="description">
                <b> For -  VI to VIII </b><br>
                  Marketing education provides<a href='view-skill.php?course=mkt' class='btn btn-sm bg_color_blue'>Read More..</a>        </p>
              </div>
          </div>
              <div class="timeline animate__animated animate__fadeInUp"  onclick="window.location.href='view-skill.php?course=fss';" style="cursor: pointer;" >
          <div class="timeline-icon"><span class="year">FSS</span></div>
              <div class="timeline-content">
              <h3 class="title">Foundation Skills for Sciences<br>(Pharma. & Biotechnology) </h3>
              <p class="description">
                <b> For -  IX to X </b><br>
                  Foundation Skills for Sciences education provides<a href='view-skill.php?course=fss' class='btn btn-sm bg_color_blue'>Read More..</a>        </p>
              </div>
          </div>
    
          
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>