<style>
    .grid {
        position: relative;
        margin: 0 auto;
        padding: 1em 0 4em;
        max-width: 1000px;
        list-style: none;
        text-align: center;
    }

    /* Common style */
    .grid figure {
        position: relative;
        float: left;
        overflow: hidden;
        margin: 10px 1%;
        min-width: 320px;
        max-width: 480px;
        max-height: 360px;
        width: 48%;
        background: #3085a3;
        text-align: center;
        cursor: pointer;
    }

    .grid figure img {
        position: relative;
        display: block;
        min-height: 100%;
        max-width: 100%;
        opacity: 0.8;
    }

    .grid figure figcaption {
        padding: 2em;
        color: #fff;
        text-transform: uppercase;
        font-size: 1.25em;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .grid figure figcaption::before,
    .grid figure figcaption::after {
        pointer-events: none;
    }

    .grid figure figcaption,
    .grid figure figcaption>a {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    /* Anchor will cover the whole item by default */
    /* For some effects it will show as a button */
    .grid figure figcaption>a {
        z-index: 1000;
        text-indent: 200%;
        white-space: nowrap;
        font-size: 0;
        opacity: 0;
    }

    .grid figure h2 {
        word-spacing: -0.15em;
        font-weight: 300;
    }

    .grid figure h2 span {
        font-weight: 800;
    }

    .grid figure h2,
    .grid figure p {
        margin: 0;
    }

    .grid figure p {
        letter-spacing: 1px;
        font-size: 68.5%;
    }

    /* Individual effects */

 
figure.effect-layla {
	background: #18a367;
}

figure.effect-layla img {
	height: 390px;
}

figure.effect-layla figcaption {
	padding: 3em;
}

figure.effect-layla figcaption::before,
figure.effect-layla figcaption::after {
	position: absolute;
	content: '';
	opacity: 0;
}

figure.effect-layla figcaption::before {
	top: 50px;
	right: 30px;
	bottom: 50px;
	left: 30px;
	border-top: 1px solid #fff;
	border-bottom: 1px solid #fff;
	-webkit-transform: scale(0,1);
	transform: scale(0,1);
	-webkit-transform-origin: 0 0;
	transform-origin: 0 0;
}

figure.effect-layla figcaption::after {
	top: 30px;
	right: 50px;
	bottom: 30px;
	left: 50px;
	border-right: 1px solid #fff;
	border-left: 1px solid #fff;
	-webkit-transform: scale(1,0);
	transform: scale(1,0);
	-webkit-transform-origin: 100% 0;
	transform-origin: 100% 0;
}

figure.effect-layla h2 {
	padding-top: 26%;
	-webkit-transition: -webkit-transform 0.35s;
	transition: transform 0.35s;
}

figure.effect-layla p {
	padding: 0.5em 2em;
	text-transform: none;
	opacity: 0;
	-webkit-transform: translate3d(0,-10px,0);
	transform: translate3d(0,-10px,0);
}

figure.effect-layla img,
figure.effect-layla h2 {
	-webkit-transform: translate3d(0,-30px,0);
	transform: translate3d(0,-30px,0);
}

figure.effect-layla img,
figure.effect-layla figcaption::before,
figure.effect-layla figcaption::after,
figure.effect-layla p {
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
}

figure.effect-layla:hover img {
	opacity: 0.7;
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}

figure.effect-layla:hover figcaption::before,
figure.effect-layla:hover figcaption::after {
	opacity: 1;
	-webkit-transform: scale(1);
	transform: scale(1);
}

figure.effect-layla:hover h2,
figure.effect-layla:hover p {
	opacity: 1;
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}

figure.effect-layla:hover figcaption::after,
figure.effect-layla:hover h2,
figure.effect-layla:hover p,
figure.effect-layla:hover img {
	-webkit-transition-delay: 0.15s;
	transition-delay: 0.15s;
}

    @media screen and (max-width: 50em) {
        .content {
            padding: 0 10px;
            text-align: center;
        }

        .grid figure {
            display: inline-block;
            float: none;
            margin: 10px auto;
            width: 100%;
        }
    }

    *,
    *:after,
    *:before {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .clearfix:before,
    .clearfix:after {
        display: table;
        content: '';
    }

    .clearfix:after {
        clear: both;
    }

    

    a {
        outline: none;
        color: #3498db;
        text-decoration: none;
    }

    a:hover,
    a:focus {
        color: #528cb3;
    }

    section {
        padding: 1em;
        text-align: center;
    }

    .content {
        margin: 0 auto;
        max-width: 1000px;
    }

    .content>h2 {
        clear: both;
        margin: 0;
        padding: 4em 1% 0;
        color: #484B54;
        font-weight: 800;
        font-size: 1.5em;
    }

    .content>h2:first-child {
        padding-top: 0em;
    }

    /* Header */
    .codrops-header {
        margin: 0 auto;
        padding: 4em 1em;
        text-align: center;
    }

    .codrops-header h1 {
        margin: 0;
        font-weight: 800;
        font-size: 4em;
        line-height: 1.3;
    }

    .codrops-header h1 span {
        display: block;
        padding: 0 0 0.6em 0.1em;
        color: #74777b;
        font-weight: 300;
        font-size: 45%;
    }

    /* Demo links */
    .codrops-demos {
        clear: both;
        padding: 1em 0 0;
        text-align: center;
    }

    .content+.codrops-demos {
        padding-top: 5em;
    }

    .codrops-demos a {
        display: inline-block;
        margin: 0 5px;
        padding: 1em 1.5em;
        text-transform: uppercase;
        font-weight: bold;
    }

    .codrops-demos a:hover,
    .codrops-demos a:focus,
    .codrops-demos a.current-demo {
        background: #3c414a;
        color: #fff;
    }

    /* To Navigation Style */
    .codrops-top {
        width: 100%;
        text-transform: uppercase;
        font-weight: 800;
        font-size: 0.69em;
        line-height: 2.2;
    }

    .codrops-top a {
        display: inline-block;
        padding: 1em 2em;
        text-decoration: none;
        letter-spacing: 1px;
    }

    .codrops-top span.right {
        float: right;
    }

    .codrops-top span.right a {
        display: block;
        float: left;
    }

    .codrops-icon:before {
        margin: 0 4px;
        text-transform: none;
        font-weight: normal;
        font-style: normal;
        font-variant: normal;
        font-family: 'codropsicons';
        line-height: 1;
        speak: none;
        -webkit-font-smoothing: antialiased;
    }

    .codrops-icon-drop:before {
        content: "\e001";
    }

    .codrops-icon-prev:before {
        content: "\e004";
    }

    /* Related demos */
    .related {
        clear: both;
        padding: 6em 1em;
        font-size: 120%;
    }

    .related>a {
        display: inline-block;
        margin: 20px 10px;
        padding: 25px;
        border: 1px solid #4f7f90;
        text-align: center;
    }

    .related a:hover {
        border-color: #39545e;
    }

    .related a img {
        max-width: 100%;
        opacity: 0.8;
    }

    .related a:hover img,
    .related a:active img {
        opacity: 1;
    }

    .related a h3 {
        margin: 0;
        padding: 0.5em 0 0.3em;
        max-width: 300px;
        text-align: left;
    }

    /* Demo ad design */
    body #cdawrap {
        background: none;
        top: 50px;
        border: none;
    }

    body #cdawrap a {
        color: #fff !important;
    }

    body #cda-remove {
        color: #fff;
    }

    @media screen and (max-width: 25em) {
        .codrops-header {
            font-size: 75%;
        }

        .codrops-icon span {
            display: none;
        }
    }
</style>

<style>
    
.button {
  position: absolute;
  width: 500px;
  left:0;
  top: 180px;
  text-align: center;
  opacity: 0;
  transition: opacity .35s ease;
}

.button a {
  width: 200px;
  padding: 12px 48px;
  text-align: center;
  color: white;
  border: solid 2px white;
  z-index: 1;
}

.container:hover .button {
  opacity: 1;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
<div>
    <h2 class="mt-20 line-bottom">@lang('msg.Strategic cross cutting themes')</h2>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>
    <div class="content">
        <div class="grid">
            <figure class="effect-layla">
                <img src="https://tympanus.net/Development/HoverEffectIdeas/img/6.jpg" alt="img06"/>
                <figcaption>
                    <h2 class="text-white">Gender  &nbsp;  Equality &nbsp; and &nbsp; Women &nbsp; Empowerment</h2>
                    <p>View More Details </p>
                    <a id="myBtn" data-lan="@lang('msg.BDS ensures that the all-development initiatives taken by the organization would address increased participation of women and inclusive decision making. Capacity of the women at the household is assed with more attention to include them into the possible economic development initiatives as well. BDS puts its utmost effort to maintain the gender balance in the staff and builds the capacity of the staff in terms of gender and development to improve their understanding on the concept and make sure it is reflected in all the initiatives.')">View more</a>
                </figcaption>			
            </figure>
            <figure class="effect-layla">
                <img src="https://tympanus.net/Development/HoverEffectIdeas/img/3.jpg" alt="img03"/>
                <figcaption>
                    <h2 class="text-white">Environment  &nbsp; Sustainability</h2>
                    <p>View More Details </p>
                    <a id="myBtn2" data-lan2="@lang('msg.All BDS activities are environment sensitive and focused at sustainability of it. BDS does not support the activities that harm the environment. Especially during the construction process BDS obtains environment report from the relevant authorities to be more vigilant on that aspect. Environmental aspects are taken into account in any agriculture work undertaken with private sector partnership as well.')">View more</a>
                </figcaption>			
            </figure>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
                <div class="grid">
                    <figure class="effect-layla">
                        <img src="https://tympanus.net/Development/HoverEffectIdeas/img/3.jpg" alt="img03"/>
                        <figcaption>
                            <h2 class="text-white">Inclusion &nbsp; of &nbsp; persons &nbsp; with &nbsp; disabilities</h2>
                            <p>View More Details </p>
                            <a id="myBtn3" data-lan3="@lang('msg.According to the population and housing information of 2012 there are 1,617,924 impaired persons in the total population who have either a mental or a physical impairment out of which 695,263 are males and 922,661 are females. The majority of the people with disabilities are poor. Poverty is a consequence of disability since people with disabilities often lack access to education, health services and income-generating activities. They are often denied their human, social and economic rights which contribute to high levels of vulnerability and exclusion. People with disabilities have the right to work. This has been enshrined in several national Acts and international Conventions ratified by the government of Sri Lanka, but policy implementation measures are still inadequate to enable them to exercise that right. BDS ensures that the all development initiatives taken by the organization would provide reasonable space for the participation of persons with disabilities.')">View more</a>
                        </figcaption>			
                    </figure>
                </div>
            
            <div class="col-md-3"></div>
        </div>
        

    </div>
</div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p style="font-size:medium" id="description"></p>
  </div>

</div>
<script>
    // Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
    var data = btn.getAttribute("data-lan");
    $('#description').text(data);
}


btn2.onclick = function() {
    modal.style.display = "block";
    var data2 = btn2.getAttribute("data-lan2");
    $('#description').text(data2);
}

btn3.onclick = function() {
    modal.style.display = "block";
    var data3 = btn3.getAttribute("data-lan3");
    $('#description').text(data3);
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



// $(document).keyup(function(e) {
//   if (e.keyCode == 27) {
//      modal.style.display = "none";
//   }
// });



document.onkeydown = function (e) {
  switch (e.keyCode) {
    case 27:
        modal.style.display = "none";
        break;
    default:
        return; // Do nothing for the rest
  }
};
</script>