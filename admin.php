<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title>Collapsible sidebar using Bootstrap 4</title>
        
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style.css">

        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
        <!-- Style Sheet -->
        <style>
            .wrapper {
                display: flex;
                align-items: stretch;
            }
            #sidebar {
                min-width: 250px;
                max-width: 250px;
                min-height: 100vh;
            }
            #sidebar.active {
                margin-left: -250px;
            }
            a[data-toggle="collapse"] {
                position: relative;
            }
            .dropdown-toggle::after {
                display: block;
                position: absolute;
                top: 50%;
                right: 20px;
                transform: translateY(-50%);
            }
            @media (max-width: 768px) {
            /* Reversing the behavior of the sidebar: 
            it'll be rotated vertically and off canvas by default, 
            collapsing in on toggle button click with removal of 
            the vertical rotation.   */
            #sidebar {
                margin-left: -250px;
                transform: rotateY(100deg);
            }
            #sidebar.active {
                margin-left: 0;
                transform: none;
            }

            /* Reversing the behavior of the bars: 
            Removing the rotation from the first,
            last bars and reappear the second bar on default state, 
            and giving them a vertical margin */
            #sidebarCollapse span:first-of-type,
            #sidebarCollapse span:nth-of-type(2),
            #sidebarCollapse span:last-of-type {
                transform: none;
                opacity: 1;
                margin: 5px auto;
            }

            /* Removing the vertical margin and make the first and last bars rotate again when the sidebar is open, hiding the second bar */
            #sidebarCollapse.active span {
                    margin: 0 auto;
                }
                #sidebarCollapse.active span:first-of-type {
                    transform: rotate(45deg) translate(2px, 2px);
                }
                #sidebarCollapse.active span:nth-of-type(2) {
                    opacity: 0;
                }
                #sidebarCollapse.active span:last-of-type {
                    transform: rotate(-45deg) translate(1px, -1px);
                }
            }   
            @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
            body {
                font-family: 'Poppins', sans-serif;
                background: #fafafa;
            }
            p {
                font-family: 'Poppins', sans-serif;
                font-size: 1.1em;
                font-weight: 300;
                line-height: 1.7em;
                color: #999;
            }
            a, a:hover, a:focus {
                color: inherit;
                text-decoration: none;
                transition: all 0.3s;
            }
            #sidebar {
                /* don't forget to add all the previously mentioned styles here too */
                background: #7386D5;
                color: #fff;
                transition: all 0.3s;
            }
            #sidebar .sidebar-header {
                padding: 20px;
                background: #6d7fcc;
            }
            #sidebar ul.components {
                padding: 20px 0;
                border-bottom: 1px solid #47748b;
            }
            #sidebar ul p {
                color: #fff;
                padding: 10px;
            }
            #sidebar ul li a {
                padding: 10px;
                font-size: 1.1em;
                display: block;
            }
            #sidebar ul li a:hover {
                color: #7386D5;
                background: #fff;
            }
            ul ul a {
                font-size: 0.9em !important;
                padding-left: 30px !important;
                background: #6d7fcc;
            }
            #sidebarCollapse {
                width: 40px;
                height: 40px;
                background: #f5f5f5;
            }

            #sidebarCollapse span {
                width: 80%;
                height: 2px;
                margin: 0 auto;
                display: block;
                background: #555;
                transition: all 0.8s cubic-bezier(0.810, -0.330, 0.345, 1.375);
            }
            #sidebarCollapse span:first-of-type {
                /* rotate first one */
                transform: rotate(45deg) translate(2px, 2px);
            }
            #sidebarCollapse span:nth-of-type(2) {
                /* second one is not visible */
                opacity: 0;
            }
            #sidebarCollapse span:last-of-type {
                /* rotate third one */
                transform: rotate(-45deg) translate(1px, -1px);
            }
            #sidebarCollapse.active span {
                /* no rotation */
                transform: none;
                /* all bars are visible */
                opacity: 1;
                margin: 5px auto;
            }
            
        </style>
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script> 
    </head>
    <body style="background-color: #D2D7D3">
        <div class="wrapper"">
            <!-- Sidebar -->
            <nav id="sidebar" style="background-color: #CF3A24">
                <!-- Sidebar Header -->
                <div class="sidebar-header" style="background-color: #CF000F">
                    <h3>Jessu's Cuisine</h3>
                </div>
                <ul class="list-unstyled components">
                    <p>Dummy Heading</p>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="#">Home 1</a>
                            </li>
                            <li>
                                <a href="#">Home 2</a>
                            </li>
                            <li>
                                <a href="#">Home 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#">Page 1</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </nav>
            <!-- Page Content -->
            <div id="content">
                <button type="button" id="sidebarCollapse" class="navbar-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div> 
        <!-- Script -->
        <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
        </script>
    </body>
</html>