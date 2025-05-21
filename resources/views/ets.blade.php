<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Naela Ali | Website </title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <!-- alert -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



        <script>
            
            // function dibuat agar tidak langsung di load waktu web dibuka tapi sesuai kebutuhan(kalo dipanggil)
            // execute js ada di console, klo kosong artinya ga eror
            function validasi()
            {
                var nama= document.getElementById("nama").value;
                var email= document.getElementById("email").value;
                
                if (nama.length ==0){
                    //alert ("Nama harus diisi");
                    swal("Pesan", "Nama harus diisi", "error");
                    document.getElementById("nama").focus();
                    return false;

                }
                
                if (email.length == 0){
                    //alert ("Email harus diisi");
                    swal("Pesan", "Email harus diisi", "error");
                    document.getElementById("email").focus();
                    return false;
                }

                var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(email)) {
                    swal("Gagal!", "Format email tidak valid!", "error");
                    return false;
                }


            }


        </script>

        
    </head>

    <style>
         .subscribe {
  max-width: 400px;
}


.form-control {
  background-color: transparent;
  border: none;
  border-bottom: 1px solid #fff7f7;
  color: #fff;
  font-size: 16px;
  outline: none;
  width: 100%;
  padding: 10px 0;
  margin-bottom: 20px;
}


.form-control::placeholder {
  color: #fffafa;
}


.btn {
  background-color: #d100f2;
  color: #fff;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 8px;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #e2a3e8;
}


.subscribe-image img {
  max-width: 400px;
  height: auto;
  border-radius: 20px;
}

@media (max-width: 768px) {
  .subscribe-container {
    flex-direction: column;
    align-items: flex-start;
  }

  .subscribe-image img {
    margin-top: 20px;
    width: 100%;
    max-width: none;
  }
}
    </style>

    <body id="page-top">
        <!-- Mashead header-->
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">Naela Ali</h1>
                            <p class="lead fw-normal text-muted mb-5">Naela Ali (b. 1992) is a Jakarta-based artist, illustrator, and author. </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                        <div class="masthead-device-mockup">
                            <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"></stop>
                                        <stop class="gradient-end-color" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle></svg
                            ><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg
                            ><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                    <div class="screen bg-black">
                                        <!-- PUT CONTENTS HERE:-->
                                        <!-- * * This can be a video, image, or just about anything else.-->
                                        <!-- * * Set the max width of your media to 100% and the height to-->
                                        <!-- * * 100% like the demo example below.-->
                                         <img style="width: 100%; height: 100%" src="assets\img\naefiks.jpeg" class="rounded img-fluid" alt="">
                                        <!-- <img style="max-width: 100%; height: 100%"><source src="assets\img\naela.webp" type="video/mp4" /></video> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Quote/testimonial aside-->
        <aside class=" bg-gradient-primary-to-secondary">
            <div class="container px-5">
                <div class="row gx-5 ">
                    <div class="col-12">
                        <div class=" text-white mb-4">
                          <p><strong>Naela Ali (b. 1992)</strong> is a Jakarta-based artist, illustrator, and author. Since the release of her first book in 2016, she has published 11 works, several of which have been translated into Portuguese and Vietnamese. Her publications have been showcased at esteemed international events, including the London Book Fair, Singapore Art Book Fair, among others. In addition to her literary work, Naela has collaborated with a range of prominent brands to create merchandise and editorial content.</p>

                          <br>
              
                          <p>Currently, Naela is focused on advancing her career as a painter and has exhibited in various shows, including one of Jakarta's most prestigious art fairs. Her artistic practice explores the quiet, meaningful moments of everyday life, particularly inspired by her experiences in Japan. Her paintings frequently capture scenes that evoke a deep sense of nostalgia for the subtle beauty found in the mundane.</p>
              
                          <br>
              
                          <p>In 2023, Naela completed an art residency in rural area in Fukuoka, Japan. This immersive experience deepened her appreciation for the quiet simplicity of life and reinforced her focus on painting as a means of capturing these understated moments.</p>  
              
                          <br>
                          
                          <p>Through her work, Naela strives to reflect the serenity and calm inherent in Japan’s everyday life, often focusing on overlooked details that highlight the contrast between stillness and the fast pace of modern existence. Her art invites viewers to pause and appreciate the beauty of slowing down, offering a fresh perspective on the ordinary. </p>
              
                          <br>
                        </div>
                       
                    </div>
                </div>
            </div>
        </aside>
        <!-- App features section-->
        <section id="features">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                        <div class="container-fluid px-5">
                            <div class="row gx-5">
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->

                                    <div class="text-center">
                                        <h3 class="font-alt">2025</h3>
                                        <p class="text-muted mb-0">Art Jakarta Gardens, Can’s Gallery, Hutan Kota by Plataran, Jakarta, Indonesia</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <h3 class="font-alt">2024</h3>
                                          <ul class="text-muted mb-0">
                                            <li>Solo Exhibition ‘The Beauty of the Mundane’, Ruang Arta Derau, Bali, Indonesia</li>
                                            <li>Art Jakarta, Can’s Gallery, JIEXPO Kemayoran, Jakarta, Indonesia</li>
                                            <li>All the Small things Extented, Art Loka, Jakarta, Indonesia</li>
                                          </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-5 mb-md-0">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <h3 class="font-alt">2023</h3>
                                        <ul class="text-muted mb-0">
                                          <li>All the Small Things #4, Can’s Gallery, Jakarta, Indonesia</li>
                                          <li>Group Exhibition, Studio Kura, Itoshima, Japan</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <h3 class="font-alt">2018-2016</h3>
                                        <ul class="text-muted mb-0">
                                          <li>2018, Tim Badak, Sumatran Rhinos Exhibition, Jakarta, Indonesia</li>
                                          <li>2017, Solo Drawing Exhibition, Jakarta, Indonesia</li>
                                          <li>2016, Stromtrooper Helmet Design Exhibition by Disney Indonesia, Jakarta, Indonesia</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-0">
                        <!-- Features section device mockup-->
                        <div class="features-device-mockup">
                            <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"></stop>
                                        <stop class="gradient-end-color" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle></svg
                            ><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg
                            ><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                    <div class="screen bg-black">
                                        <!-- PUT CONTENTS HERE:-->
                                        <!-- * * This can be a video, image, or just about anything else.-->
                                        <!-- * * Set the max width of your media to 100% and the height to-->
                                        <!-- * * 100% like the demo example below.-->
                                         <img style="max-width: 100%; height: 100%" src="assets\img\gili1.jpeg" alt="">
                                        <!-- <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%"><source src="assets/img/demo-screen.mp4" type="video/mp4" /></video> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic features section-->
        <section class="bg-light">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12 col-lg-5">
                        <h2 class="display-4 lh-1 mb-4">Published Books</h2>
                        <ul class="lead fw-normal text-muted mb-5 mb-lg-0">
                          <li class="mb-4">Gilly’s Notes on Life, 2025</li>
                          <li class="mb-4">Records of Rainy Days, 2022</li>
                          <li class="mb-4">Silly Gilly Daily Stay at Home, 2021</li>
                          <li class="mb-4">Dreams are Made of a Box of Crayons, 2020</li>
                          <li class="mb-4">Not So Silly Postcard and Sticker Book, 2019</li>
                          <li class="mb-4">Not So Silly Journal, 2019</li>
                          <li class="mb-4">Silly Gilly Daily, 2019</li>

                          <li class="mb-4">Floating in Space, 2018</li>

                          <li class="mb-4">Things and Thoughts I Drew when I was Bored, 2017 Stories for Rainy Days vol III, 2018</li>

                          <li class="mb-4">Stories for Rainy Days vol II, 2017</li>

                          <li class="mb-4">Stories for Rainy Days, 2016</li>
                        </ul>
                

                        
                    </div> 
                </div>
            </div>
        </section>
        <!-- Call to action section-->
        <!-- App badge section-->
        <section class="bg-gradient-primary-to-secondary" id="download">
            <div class="container px-5 position-relative">
                <h2 class="text-white font-alt mb-4">Subscribe to newsletter</h2>
                <div class="d-flex flex-column flex-lg-row ">
                  <form id="subscribe" method="get" action="https://google.co.id" onsubmit="return validasi();">

                    <input type="text" class="form-control" id="nama" name="nama" placeholder="name" >
                    <br>
    
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" >
    
                    <br>
                    
                    <input type="submit" class="btn btn-secondary" value="Subscribe">
    
                    </form>
                </div>
                <div class="position-absolute top-50 end-0 translate-middle-y" style="width:20%" >
                    <img src="assets\img\form.jpg" class="rounded img-fluid" alt="">
                </div>
            </div>
        </section>





        
        <!-- Footer-->
        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; Your Website 2023. All Rights Reserved.</div>
                    <a href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">FAQ</a>
                </div>
            </div>
        </footer>
        <!-- Feedback Modal-->
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
