<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CDN Fontawesome -->
    <script
        src="https://kit.fontawesome.com/32f82e1dca.js"
        crossorigin="anonymous"
    ></script>
    <!-- CDN Slick -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <title>Wedding Invitation | Admin</title>
</head>
<body>
    <!-- modal cover undangan -->
        <div class="modal fade" id="onload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> <!-- Add this line to your code -->
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                        <div class="cover-undangan">
                            <div class="content">
                                <div class="wedding-of">
                                    <p>The Wedding of</p>
                                </div>
                                <div class="title_wedding">
                                    <p>Vania <span>&</span> Leonardo</p>
                                </div>
                                @if ($tamu->gender === 'Pria')
                                    <p class="invite">Dear Mr.</p>
                                @else
                                    <p class="invite">Dear Ms./Mrs.</p>
                                @endif
                                <div class="nama_tamu">
                                    <p>{{ $tamu->nama }}</p>
                                </div>
                                <p>You are cordially invited to our wedding.</p>
                                <a class="button" href="wedding.html" data-bs-dismiss="modal">Open Invitation</a>
                            </div>
                        </div>     
                </div>
            </div>
        </div> 
        <!-- And the relavant closing div tag -->

        <div class="elemen_1">
            <div class="main">
                <div class="wedding-of">
                    <p>The Wedding of</p>
                </div>
                <div class="leoVania">
                    <p>Vania   <span>&</span>   Leonardo</p>
                </div>
                <div class="wedding-of">
                    <p>28.10.2023</p>
                </div>
            </div>
        </div>
        <div class="quote_1 ">
            <div class="quote_text reveal fade-bottom">
                <p>Once in awhile, right in the middle of an ordinary life, love gives us a fairy tale.</p>
            </div>
            <div class="quote_author reveal fade-bottom">
                <p>Unknown</p>
            </div>
            <div class="the_beloved reveal fade-bottom">
                <p>The Beloved</p>
            </div>
            <div class="groom_bride reveal fade-bottom">
                <p>Groom & Bride</p>
            </div>
        </div>
        <!-- <div class="wedding">
    
        </div> -->

        <div class="container_groom">
            <div class="groom_text">
                <h1 class="text1">The Groom</h1>
            </div>
            <div class="groom_photo">
                <div class="text_groom reveal fade-bottom">
                    <h1 class="text2">Leonardo</h1>
                    <div class="social_media">
                        <ul>
                            <li>
                                <span class="fa-brands fa-twitter fa-xl"></span>
                            </li>
                            <li>
                                <span class="fa-brands fa-facebook fa-xl"></span>
                            </li>
                            <li>
                                <span class="fa-brands fa-instagram fa-xl"></span>
                            </li>
                        </ul>
                    </div>
                    <h2 class="text3">Leonardo Pohan</h2>
                    <p class="text4">Son of Porten Pohan & Parsitepu</p>
                </div>
            </div>

        </div>

        <div class="container_groom">
            <div class="bride_photo">
                <div class="text_groom reveal fade-bottom" >
                    <h1 class="text2" >Vania</h1>
                    <div class="social_media">
                        <ul>
                            <li>
                                <span class="fa-brands fa-twitter fa-xl"></span>
                            </li>
                            <li>
                                <span class="fa-brands fa-facebook fa-xl"></span>
                            </li>
                            <li>
                                <span class="fa-brands fa-instagram fa-xl"></span>
                            </li>
                        </ul>
                    </div>
                    <h2 class="text3">Vania</h2>
                    <p class="text4">Son of Porten Pohan & Parsitepu</p>
                </div>
            </div>
            <div class="groom_text">
                <h1 class="text1_bride">The Bride</h1>
            </div>
        </div>

        <div class="quote_2 ">
            <div class="quote_text2 reveal fade-bottom">
                <p>The highest happiness on earth is the happiness of marriage.</p>
            </div>
            <div class="quote_author2 reveal fade-bottom">
                <p>William Lyon Phelps</p>
            </div>
        </div>

        <div class="wedding_day">
            <div class="card_wedding shadow-lg">
                <div class="card_header ">
                    <div class="header_text">
                        <p>When & Where</p>
                    </div>
                    <div class="wed_text reveal fade-bottom">
                        <p>Wedding Day</p>          
                    </div>
                    <div class="quote_header reveal fade-bottom">
                        <p>Gravitation is not responsible for people falling in love.</p>
                    </div>
                    <div class="author_header reveal fade-bottom">
                        <p>Albert Einstein</p>
                    </div>
                </div>
                <div class="card_body">
                    <div class="pemberkatan">
                        <div class="text_pemberkatan">
                            <h2>Holy Matrimony</h2>
                        </div>
                        <div class="line"></div>
                        <div class="card_content">
                            <div class="tanggal">
                                <p><i class="fa-regular fa-calendar"></i>Sunday, 31 December 2023</p>
                            </div>
                            <div class="jam">
                                <p><i class="fa-regular fa-clock"></i>10.00 - 12.00 WIB</p>
                            </div>
                             <div class="place">   
                                <p><i class="fa-solid fa-location-dot"></i><span class="fw-bold">Shangri-La Hotel Jakarta </span>  <br>
                                </span></p>
                                <p class="alamat">

                                    Jl. Jenderal Sudirman No.Kav. 1, Karet Tengsin, Kecamatan Tanah Abang, Kota Jakarta Pusat, DKI Jakarta 10220
                                </p>
                                
                            </div>
                        </div>
                        <div class="button_group">
                            <a href=""><i class="fa-solid fa-map-location-dot"></i>Open Map</a>
                            <a href=""><i class="fa-regular fa-calendar-days"></i>Add to Calender</a>
                        </div>
                    </div>
                    <div class="resepsi">
                        <div class="text_resepsi">
                            <h2>Wedding Reception</h2>
                        </div>
                        <div class="line"></div>
                        <div class="card_content">
                            <div class="tanggal">
                                <p><i class="fa-regular fa-calendar"></i>Sunday, 31 December 2023</p>
                            </div>
                            <div class="jam">
                                <p><i class="fa-regular fa-clock"></i>10.00 - 12.00 WIB</p>
                            </div>
                             <div class="place">   
                                <p><i class="fa-solid fa-location-dot"></i><span class="fw-bold">Shangri-La Hotel Jakarta </span>  <br>
                                 </p>
                                 <p class="alamat">

                                    Jl. Jenderal Sudirman No.Kav. 1, Karet Tengsin, Kecamatan Tanah Abang, Kota Jakarta Pusat, DKI Jakarta 10220
                                </p>
                                
                            </div>
                        </div>
                        <div class="button_group">
                            <a href=""><i class="fa-solid fa-map-location-dot"></i>Open Map</a>
                            <a href=""><i class="fa-regular fa-calendar-days"></i>Add to Calender</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wed-story ">
            <span class="reveal fade-bottom">The Journey</span>
            <span class="reveal fade-bottom">Our Love Story</span>
            <span class="reveal fade-bottom">How it all started</span>

            <div class="story-wrapper">
                <div class="story-card">
                    <div class="story-title">
                        <span><i>First Meet</i></span>
                    </div>
                    <div class="story-image">
                        <img src="https://ik.imagekit.io/u1ds9zj1i/image/first_meet_medium.jpg?updatedAt=1685940334261" alt="" >
                    </div>
                    <div class="story-year">
                        <span>2015</span>
                    </div>
                </div>
                <div class="story-card">
                    <div class="story-title">
                        <span><i>Start Dating</i></span>
                    </div>
                    <div class="story-image">
                        <img src="https://ik.imagekit.io/u1ds9zj1i/image/start_dating_medium.jpg?updatedAt=1685940334667" alt="" >
                    </div>
                    <div class="story-year">
                        <span>2021</span>
                    </div>
                </div>
                <div class="story-card">
                    <div class="story-title">
                        <span><i>Engagement</i></span>
                    </div>
                    <div class="story-image">
                        <img src="https://ik.imagekit.io/u1ds9zj1i/image/2_medium.jpg?updatedAt=1685940337347" alt="" >
                    </div>
                    <div class="story-year">
                        <span>2023</span>
                    </div>
                </div>
                <div class="story-card">
                    <div class="story-title">
                        <span><i>Wedding</i></span>
                    </div>
                    <div class="story-image">
                        <img src="https://ik.imagekit.io/u1ds9zj1i/image/married_medium.jpg?updatedAt=1685940336549" alt="" >
                    </div>
                    <div class="story-year">
                        <span>2023</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="wed-gallery">
            <div class="gallery-text reveal fade-bottom">
                <span>A Glimpse of</span>
                <span>Our Moments</span>
                <span>I would rather share one lifetime with you than face all the ages of this world alone.</span>
                <span>J. R. R. Tolkien</span>
            </div>

            <div class="gallery">
                <div class="gallery-item">
                    <img src="https://ik.imagekit.io/u1ds9zj1i/image/1_medium.jpg?updatedAt=1685940335056" alt="" >
                </div>
                <div class="gallery-item">
                    <img src="https://ik.imagekit.io/u1ds9zj1i/image/2_medium.jpg?updatedAt=1685940337347" alt="" >
                </div>
                <div class="gallery-item">
                    <img src="https://ik.imagekit.io/u1ds9zj1i/image/grooms_medium.jpg?updatedAt=1685940332478" alt="" >
                </div>
                <div class="gallery-item">
                    <img src="https://ik.imagekit.io/u1ds9zj1i/image/brides_medium.jpg?updatedAt=1685940334666" alt="" >
                </div>
                <div class="gallery-item">
                    <img src="https://ik.imagekit.io/u1ds9zj1i/image/first_meet_medium.jpg?updatedAt=1685940334261" alt="" >
                </div>
                <div class="gallery-item">
                    <img src="https://ik.imagekit.io/u1ds9zj1i/image/1_medium.jpg?updatedAt=1685940335056" alt="" >
                </div>
                <div class="gallery-item">
                    <img src="https://ik.imagekit.io/u1ds9zj1i/image/2_medium.jpg?updatedAt=1685940337347" alt="" >
                </div>
                <div class="gallery-item">
                    <img src="https://ik.imagekit.io/u1ds9zj1i/image/start_dating_medium.jpg?updatedAt=1685940334667" alt="" >
                </div>
            </div>
        </div>

        <div class="health_protocol">

        </div>

        <div class="rsvp_makewish">
            <div class="card card_rsvp">
                <div class="card-body shadow">
                    <div class="header">
                        <h1>RSVP</h1>
                        <P>Please Confirm Your Attendance</P>
                    </div>
                    <div class="form">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control mb-3" placeholder="Input your name">
                        <label for="kehadiran"> Kehadiran</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Hadir
                            </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                tidak hadir
                            </label>
                        </div>
                        
                        <a href="#" class="button">Submit</a>
                    </div>
                </div>
            </div>
            <div class="card card_wish ">
                <div class="card-body shadow">
                    <div class="header">
                        <h1>Make a Wish</h1>
                        <P>It is an honor and pleasure for us, if you can attend and give us your blessing</P>
                    </div>
                    <div class="form">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control mb-4" placeholder="Input your name">

                        <label for="nama">Your Wish</label>
                        <textarea class="form-control mb-4" placeholder="Input Your Wish" style="height: 100px"></textarea>
                        <a href="#" class="button">Submit</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="gift">
            <div class="text_gift">
                <h2>Share Love</h2>
                <p>Your prayers & blessings at our wedding is enough as a gift, but if you want to give more, we are happy to <br> receive it and it will complement our happiness even more</p>
            </div>

            <div class="card_gift">
                <div class="card_gift_body shadow-lg">
                    <img src="https://ik.imagekit.io/u1ds9zj1i/image/qris_sample-removebg-preview.webp?updatedAt=1685937658210" alt="" >
                    <h2>Bank BNI</h2>
                    <p>Cevin Wahyu Cristianto</p>
                    <p id="noRek">1119729571</p>
                    <div class="button_gift">
                        <button href="" class="button_copy" onclick="copyContent()"><i class="fa-regular fa-copy"></i>Copy</button>
                        <a href="#" class="button_confirm"><i class="fa-brands fa-whatsapp"></i>Confirm</a>
                    </div>
                </div>
            </div>
            <div class="card_gift2">
                <div class="card_gift_body shadow-lg">
                    <img src="https://ik.imagekit.io/u1ds9zj1i/image/qris_sample-removebg-preview.webp?updatedAt=1685937658210" alt="" >
                    <h2>Bank BNI</h2>
                    <p>Cevin Wahyu Cristianto</p>
                    <p id="noRek">1119729571</p>
                    <div class="button_gift">
                        <button href="" class="button_copy" onclick="copyContent()"><i class="fa-regular fa-copy"></i>Copy</button>
                        <a href="#" class="button_confirm"><i class="fa-brands fa-whatsapp"></i>Confirm</a>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="content_footer">
                <p>Thank You</p>
                <h2>Leonardo & Vania</h2>
                <p>The Big Family of</p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        <script>
            $('.story-wrapper').slick({
                infinite: true,
                speed: 1000,
                autoplay: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                    breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        </script>
        
        <script>
            $('.gallery').slick({
                infinite: true,
                speed: 1000,
                autoplay: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 320,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        </script>
        <script>
            let text = document.getElementById('noRek').innerHTML;
            const copyContent = async () => {
                try {
                    await navigator.clipboard.writeText(text);
                    console.log('Nomor Rekening copied to clipboard');
                } catch (err) {
                    console.error('Failed to copy: ', err);
                }
            }
        </script>

        <script type="text/javascript">
            window.onload = () => {
                $('#onload').modal('show');
            }
        </script>

        <script src="{{ asset('js/scroll.js') }}"></script>
</body>
</html>