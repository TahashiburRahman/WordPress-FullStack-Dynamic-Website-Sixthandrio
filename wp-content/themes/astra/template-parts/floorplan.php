<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php the_field('residence') ?></title>
    <style>
        .flrpln {
            display: flex !important;

        }

        .cont {
            width: 80%;
        }

        .contain {
            display: flex;
            flex-wrap: nowrap;
        }

        .nav {
            width: 1800px;
        }

        nav ul {
            display: inline-flex;
            list-style-type: none;
        }

        nav ul li {
            margin-right: 70px;
        }

        nav ul li h1 {
            color: #003F5D;
        }

        .closebtn {
            margin-left: 250px;
        }

        .closebtn a {
            color: #BB986E;
            text-decoration: none;

        }

        .contain3 {
            display: flex;
            justify-content: space-around;
        }

        .btn-cont {
            display: inline-flex;
            justify-content: space-around;

        }

        .btn-cont button {
            background-color: #011E39;
            color: white;
            padding: 2PX 5PX;
            margin-top: 40px;
            margin-left: 40PX;
        }

        .contain4 {
            margin-left: 10px;
        }

        .contain5 {
            display: flex;
            justify-content: space-between;
            margin-top: 85.7px;
            margin-left: 10px;
        }

        .txt {
            width: 1237px;
            font-size: 12px;
            font-weight: normal;
        }

        .txt1 {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="flrpln">
        <div class="cont">
            <div class="contain">
                <nav>
                    <ul>
                        <li>
                            <h1><span style="color:#BB986E;">Residence</span> 3</h1>
                        </li>
                        <li>
                            <h1> | <?php the_field('bedroom') ?></h1>
                        </li>
                        <li>
                            <h1> | <?php the_field('bathroom') ?></h1>
                        </li>
                        <li>
                            <h1> | <?php the_field('interior') ?></h1>
                        </li>
                        <li>
                            <h1> | <?php the_field('belconies') ?></h1>
                        </li>
                        <li>
                            <h1> | <?php the_field('total') ?></h1>
                        </li>
                    </ul>
                </nav>

            </div>
            <div class="contain2">
                <div class="btn-cont">
                    <div class="btn1"><button id="pdf-download-btn">DOWNLOAD PDF</button></div>
                    <div class="btn2"><button id="refresh-btn">SEE VIEWS</button></div>
                </div>
            </div>
            <div class="contain3">
                <img src="<?php the_field('image') ?>" alt="" width="882" height="973">
            </div>
            <div class="contain4">
                <img src="<?PHP echo get_template_directory_uri() ?>/assets/svg/floor.png" alt="" height="119.82" width="238.79">
            </div>
            <div class="contain5">
                <div class="txt">
                    <p class="txt1">ORAL REPRESENTATIONS CANNOT BE RELIED UPON AS CORRECTLY STATING THE REPRESENTATIONS OF THE DEVELOPER. FOR CORRECT REPRESENTATIONS, MAKE REFERENCE TO THIS BROCHURE AND TO THE DOCUMENTS REQUIRED BY SECTION 718.503, FLORIDA STATUTES, TO BE FURNISHED BY A DEVELOPER TO A BUYER OR LESSEE.
                    </p>
                    <p class="txt2">Stated dimensions are measured to the exterior boundaries of the exterior walls and the centerline of interior demising walls and in fact vary from the dimensions that would be determined by using the description and definition of the “Unit” set forth in the Declaration (which generally only includes the interior airspace between the perimeter walls and excludes interior structural components). For your reference, the area of the Unit, determined in accordance with those defined unit boundaries, is as set forth in Exhibit 3 to the Declaration. Note that measurements of rooms set forth on this floor plan are generally taken at the greatest points of each given room (as if the room were a perfect rectangle), without regard for any cutouts. Accordingly, the area of the actual room will typically be smaller than the product obtained by multiplying the stated length times width. All dimensions are approximate and may vary with actual construction, and all floor plans and development plans are subject to change.</p>
                </div>
                <div class="log">
                    <a href="<?php echo home_url() ?>"><img src="<?PHP echo get_template_directory_uri() ?>/assets/svg/logoss.png" alt="" height="29" width="30"></a>
                </div>
            </div>
        </div>
        <div class="closebtn">
            <div>
                <h2><a href="javascript:history.back()">Close <i class="fa-solid fa-xmark"></i> </a></h2>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var pdfButton = document.getElementById("pdf-download-btn");
            pdfButton.addEventListener("click", function() {
                var pdfUrl = "<?php the_field('pdf'); ?>";
                var link = document.createElement("a");
                link.href = pdfUrl;
                link.setAttribute("download", "");
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });
            var refreshButton = document.getElementById("refresh-btn");
            refreshButton.addEventListener("click", function() {
                location.reload();
            });
        });
    </script>
</body>

</html>