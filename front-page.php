<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Monte_Carlo
 */

get_header();
?>
    <header>
      <div class="overlay"></div>
      <video autoplay="autoplay" muted="muted">
        <source src="http://www.germanna.edu/wp-content/uploads/iStock-472650123.mp4">
      </video>
      <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
          <div class="w-100 text-white">
            <div class="row">
              <div class="col-xl-10 mx-auto">
                <!--   <img src="https://www.germanna.edu/wp-content/uploads/smc.jpg" class="img" alt="scholarship monte carlo logo with blue background gradient" height="180" width="300"> -->
                <h1 class="display-3 text-uppercase">Germanna Scholarship Monte Carlo 2020</h1>
                <p class="py-3">April, 25, 2020 <br/> 6 p.m. to 11 p.m.</p>
                <a class="btn btn-light mx-3" href="#volunteer" data-toggle="modal" data-target=".bd-example-modal-lg">Buy Tickets</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
	
    <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
      <div class="container-fluid py-5 bg-light" id="about">
        <div class="row">
          <div class="container">
            
            <div class="row">
              <div class="col-sm-12 col-md-5 col-lg-4">
                <h2 class="display-3 text-uppercase text-center text-md-left">About</h2>
                <p class="text-center text-md-left">April 26, 2020<br/>
                  Tickets: $90<br/>
                  6 p.m. to 11 p.m.<br/>
                  Joseph R. Daniel Technology Center
                </p>
                <p class="text-center text-md-left"><a href="https://www.facebook.com/ScholarshipMonteCarlo/">Get Updates</a> | <a href="http://maps.google.com/maps?q=Germanna+Community+College,+Technology+Drive,+Culpeper,+VA&hl=en&sll=37.0625,-95.677068&sspn=42.716829,56.513672&oq=germanna+com&hq=Germanna+Community+College,+Technology+Drive,+Culpeper,+VA&t=m&z=14">Get Directions</a></p>
                
              </div>
              <div class="col-sm-12 col-md-7 col-lg-8">
                <h3 class="text-center text-md-left mb-4">What does my sponsorship of Scholarship Monte Carlo do?</h3>
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                      <button class="btn btn-link font-weight-bolder text-uppercase" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Keep students enrolled through Germanna Guarantee Program
                      </button>
                      </h2>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <h3 class="card-title">Keep students enrolled through Germanna Guarantee Program</h3>
                        <p class="card-text">Do you know how many college students frequently have severe financial difficulty with college funding? Even students who receive Pell grants, scholarships and loans to help with the cost of education still have fees that they struggle to pay while studying. More often than not, the gap in fees that the student owes is $500 or less, but even this amount can result in being dropped from enrollment.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                      <button class="btn btn-link collapsed  font-weight-bolder text-uppercase" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Money goes to help fund Germanna Guarantee Program
                      </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <h3 class="card-title">Money goes to help fund Germanna Guarantee Program</h3>
                        <p class="card-text">This special funding for students who struggle with a gap in grants, scholarships and loans pays what’s left so they can stay in school. This year (Fall 2018 & Spring 2019), 292 students were provided Germanna Guarantee funds in the amount of $308,000 thanks to generous donors  to our Scholarship Monte Carlo Event. These are students who otherwise may not have had the opportunity to continue their education.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                      <button class="btn btn-link collapsed  font-weight-bolder text-uppercase" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Your generous sponsorship helps fund the Germanna Scholars program
                      </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <h3 class="card-title">Your generous sponsorship helps fund the Germanna Scholars program</h3>
                        <p class="card-text">This program provides dual enrollment scholarships for Culpeper County high school students. They graduate from Germanna at the same time they graduate from high school, and then move on to four-year universities as juniors, saving thousands of dollars in higher education tuition and helping them to avoid a lifetime of student debt.</p>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                      <button class="btn btn-link collapsed  font-weight-bolder text-uppercase" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                      The 1-2-7 Rule
                      </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <h3 class="card-title">The 1-2-7 Rule</h3>
                        <p class="card-text">Here’s another interesting fact that shows how your sponsorship impacts students and our wider community: The 1-2-7 Rule asserts that for every 1 position that requires an advanced degree, there are 2 positions where a 4-year degree is needed and 7 positions where credentials less than a 4-year degree are needed. Germanna Community College strives to address the massive skills gap that exists in our labor markets. Your sponsorship of Scholarship Monte Carlo makes a huge difference in thousands of lives!</p>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="embed-responsive embed-responsive-16by9 my-4 px-4">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/l5lRJU2RBKw"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container py-5" id="sponsorships">
        <div class="row">
          <div class="col-lg-12 col-xl-5">
            <h2 class="display-3 text-uppercase">Sponsorships</h2>
          </div>
          <div class="col-lg-12 col-xl-7">
            
            <div class="row row-cols-1 row-cols-lg-3">
              <div class="col-md-4 mb-4">
                <div class="card">
                  <div class="card-body">
                    <p class="h3 card-title text-uppercase">Bronze</p>
                    <p class="lead">$350</p>
                    <p class="card-text text-muted">
                    Includes 2 event tickets and more.*</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card">
                  <div class="card-body">
                    <p class="h3 card-title text-uppercase">Silver</p>
                    <p class="lead">$500</p>
                    <p class="card-text  text-muted">
                    Includes 4 event tickets and more.*</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-2">
                <div class="card">
                  <div class="card-body">
                    <p class="h3 card-title text-uppercase">Gold</p>
                    <p class="lead">$750</p>
                    <p class="card-text  text-muted">
                    Includes 6 event tickets and more.*</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card">
                  <div class="card-body">
                    <p class="h3 card-title text-uppercase">Platinum</p>
                    <p class="lead">$1,000</p>
                    <p class="card-text  text-muted">
                    Includes 8 event tickets and more.*</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card">
                  <div class="card-body">
                    <p class="h3 card-title text-uppercase">Prime</p>
                    <p class="lead">$2,000</p>
                    <p class="card-text  text-muted">
                    Includes 9 event tickets and more.*</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card">
                  <div class="card-body">
                    <p class="h3 card-title text-uppercase">Palladium</p>
                    <p class="lead">$2,500</p>
                    <p class="card-text  text-muted">
                    Includes 10 event tickets and more.*</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card">
                  <div class="card-body">
                    <p class="h3 card-title text-uppercase">Emerald</p>
                    <p class="lead">$3,000</p>
                    <p class="card-text  text-muted">
                    Includes 11 event tickets and more.*</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card">
                  <div class="card-body">
                    <p class="h3 card-title text-uppercase">Titanium</p>
                    <p class="lead">$3,500</p>
                    <p class="card-text  text-muted">
                    Includes 12 event tickets and more.*</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card">
                  <div class="card-body">
                    <p class="h3 card-title text-uppercase">Event</p>
                    <p class="lead">$5,000</p>
                    <p class="card-text  text-muted">
                    Includes 16 event tickets and more.*</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="card">
                  <div class="card-body">
                    <p class="h3 card-title text-uppercase">Diamond</p>
                    <p class="lead">$10,000</p>
                    <p class="card-text  text-muted">
                    Benefits negotiable.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-8 mb-4">
                <div class="card">
                  <div class="card-body">
                    <p class="h3 card-title text-uppercase">Premiere</p>
                    <p class="lead">$25,000</p>
                    <p class="card-text  text-muted">
                    Benefits negotiable. Contact the Foundation Office to discuss the opportunity.</p>
                  </div>
                </div>
              </div>
            </div>
            <h4>*Sponsorships include</h4>
            <ul>
              <li>includes signage at the event</li>
              <li>listing in program</li>
              <li>recognition in social and local media</li>
            </ul>
          </div>
        </div>
      </div>
<!--       <div class="container" id="sponsors">
        <hr>
        <div class="row py-5">
          
          <div class="col-lg-5">
            <h2 class="display-3 text-uppercase">Sponsors</h2>
          </div>
          
          <div class="col-lg-7">
            <p class="mb-0">Our thanks to longtime Germanna supporter Joe Daniel, who will be matching first-time donations to the Germanna Guarantee program up to $5,000 each. Even a small donation will have twice the impact in helping a Germanna student continue his or her education. Your support will mean that deserving Germanna students will not be turned away due to lack of funds.</p>
          </div>
        </div>
      </div> -->
<!--       <div class="container py-5" id="volunteer">
        <hr>
        <div class="row py-5">
          <div class="col-lg-5">
            <h2 class="display-3  text-uppercase">Volunteer</h2>
          </div>
          
          <div class="col-lg-7">
            <p class="lead">Volunteer blackjack dealers needed for event.</p>
            <p>Please consider volunteering to serve as a Blackjack Dealer at our upcoming 25th Annual Scholarship Monte Carlo fundraising gala.  The event will be held Saturday, April 27 from 6 p.m. until 11 p.m. at the Daniel Technology Center.</p>
            <p>
            Dealing is an excellent way to support student scholarships while having a great time. Volunteers receive a complimentary ticket where they enjoy appetizers, dinner, cocktails (21 & over) and the chance to win fabulous prizes. Non-exempt employees should check with their supervisor before committing to volunteer. Training is provided the day of the event beginning at 5:30 p.m.  </p>
            <p>
              Please email <a href="mailto:foundation@germanna.edu">foundation@germanna.edu</a> or <a href="mailto:jthompson@germanna.edu">jthompson@germanna.edu</a> to volunteer. You can also call the Foundation at (540) 423-9060.  </p>
            </div>
          </div>
        </div> -->
      </div>

<?php
get_footer();