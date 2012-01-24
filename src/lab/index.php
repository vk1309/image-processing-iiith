<?php
session_start();
$exp=$_GET['exp'];
?>
<!DOCTYPE html>
<html lang="eng"><head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
    <meta http-eqiv="content-Type" content="text/html;charset=utf-8">
    <title> Virtual Labs | experiments </title>
    <link href="css/common.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
    <script type="text/javascript" src="js/jquery-1.js"></script>
    </head>

<body>
    <header id="site_head">
        <div class="header_cont"> <!-- 960px header-->
            <!-- LOGO of the company-->
            <div id="logo">
            <h1> <a href="index.php"> Digital Image Processing Virtual Lab </a> </h1>
            </div>

        </div>
            <!-- Menu -->
    </header>
    <br>
    <article id="main_content"> <!--960px limit -->
        <table border="1">
        <tbody><tr>
        <td>
            <header id="main-title">
                <h2> Introduction </h2>
            </header>
            <section id="left-content">
			Welcome to the digital image processing virtual lab. The primary objective of this virtual lab is to supplement
an undergraduate level course on image processing and enable students to understand the
subject better. The lab consists of a diverse set of experiments with objective, theory, assessment,
references and interactive examples which are designed to improve the clarity in understanding of the
basic concepts. It is important that the student goes through the objectives and the underlying theory
before carrying out the experiments to get maximum benefit. The lab is intended to help in clarifying concepts. It is not intented for learning how to write code to do image processing. 
</p>
The primary references (textbook) for the topics covered by the experiments are:
<ul> <p>
                    <li>1. Digital Image Processing (3rd Edition)</i>, by Rafael C. Gonzalez and Richard E. Woods.</li>
                    <li>2. Fundamentals of digital image processing,</i> by Anil K. Jain.</li>
                    <li>  <p> </li>
            </ul>

<p>Before you start any of the experiments, make sure you read the <a href="#notes">notes</a> section below. </p>

            </section>
        </td>
        <td width="40%">
            <header id="main-title">
                <h2> List of Experiments </h2>
            </header>
            <section id="left-content">

                <ul class="experiment-list">
                   
                    <li class="experiment-thumb">1.
                        <a href="objective.php?exp=diff">
                            <strong> Distance and Connectivity </strong>
                        </a>
                    </li>
                    <li class="experiment-thumb">2.
                        <a href="objective.php?exp=arith">
                            <strong> Image Arithmetic </strong>
                        </a>
                    </li>
                    <li class="experiment-thumb">3.
                        <a href="objective.php?exp=affine">
                            <strong> Affine Transformation </strong>
                        </a>
                    </li>
                    <li class="experiment-thumb">4.
                        <a href="objective.php?exp=point">
                            <strong> Point Operations </strong>
                        </a>
                    </li>
                    <li class="experiment-thumb">5.
                        <a href="objective.php?exp=neigh">
                            <strong> Neighbourhood Operations </strong>
                        </a>
                    </li>
              
                    <li class="experiment-thumb">6.
                        <a href="objective.php?exp=histo">
                            <strong> Image Histogram </strong>
                        </a>
                    </li>
                    <li class="experiment-thumb">7.
                        <a href="objective.php?exp=fourier">
                            <strong> Fourier Transform </strong>
                        </a>
                    </li>
					<li class="experiment-thumb">8.
                        <a href="objective.php?exp=colour">
                            <strong>Colour Image Processing </strong>
                        </a>
                    </li>
					<li class="experiment-thumb">9.
                     <a href="objective.php?exp=morph">
						
                            <strong> Morphological Operations </strong>
                        </a>
                    </li>
					 <li class="experiment-thumb">10.
                     <a href="objective.php?exp=segment">
						
                            <strong> Image Segmentation </strong>
                        </a>
                    </li>
                    <li class="experiment-thumb">11.
                        <a href="objective.php?exp=piping">  
						
                            <strong> Image Processing Test Bench </strong>
                        </a> 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </li>
		 <li class="feedback">
		 <br>
		 <br>
		    <a href="http://virtual-labs.ac.in/feedback/form.html" target="blank">
		    <table>
		    <tr>
		    <td><img src="feedback.png" width="20px"/></td>
		    <td>Feedback</td>
		    </tr>
		    </table>
		    </a>
				</li>
                </ul>

            </section>
        </td>
        </tr>
        <tr>
        </tr>
        </tbody></table>


        <aside>

        <section id="left-content">
            <h2> <a name="notes">Notes on Experiments</a> </h2>
            <ul>
                    <li>1. Each link on the right takes you to a set of experiments that
                    is related to a specific topic. The experiments are designed to
                    expose you to certain concepts. You are encouraged to carry out
                    variants of the suggested experiments and learn from them.</li>
                    <li>2. Please make sure that you read the background material and
                    experiment procedure before carrying out the experiments. Trying
                    out the experiments before reading does not hurt, but having the
                    background will help you understand the results better.</li>
                    <li> </li>
            </ul>
			<h2> <a name="prerequisities">Assumed Pre-requisities</a> </h2>
            <ul>
                    Linear Algebra, Signals and Systems and Computer Programming 
            </ul>
        </section>

        </aside>

        <footer class="bottom">
        </footer>
    


</article></body></html>
