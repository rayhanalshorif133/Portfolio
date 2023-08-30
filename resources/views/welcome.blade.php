<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- fav icon -->
        <link rel="icon" type="image/png" href="./assets/images/icons/rayhan_image.png">
        <title>Resume - Rayhan AL Shorif</title>
        <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.0/dist/full.css"
            rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="{{asset('js/tailwind.config.js')}}"></script>
        <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
            rel="stylesheet">

        <script src="https://unpkg.com/react@18/umd/react.development.js"
            crossorigin></script>
        <script
            src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"
            crossorigin></script>
        <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/2.20.1/core.min.js"></script>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
          />

        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />

        <!-- particles -->
        <link rel="stylesheet" href="{{asset('assets/particles/css/style.css')}}" />
    </head>
    <body class="bg-[#212428]">
        <div class="relative grid grid-cols-6">
            <div
                class="hidden xl:flex col-span-1  border-r-[5px] border-[#000000] h-screen sticky top-0 text-center mx-auto">
                <div id="sideBar"></div>
            </div>
            <div
                class="sticky top-0 xl:hidden bg-[#191B1E] w-[22rem] px-5 hidden absolute border-r-[1px] border-[#191B1E] h-screen mobileSideBar z-20">
                <div id="sideBarMobile"></div>
            </div>
            <div class="col-span-6 xl:col-span-5">
                <div class="sticky z-50 p-5 m-5 xl:hidden text-end top-5">
                    <i
                        class="fa-solid fa-bars text-[1.7rem] lg:fa-2xl text-primary navbar-toggler"></i>
                </div>
                <div id="particles-js" class="relative">
                    <div class="absolute top-0 left-0 right-0">
                        <div
                            class="h-[15.2rem] w-[15.2rem] 2xl:h-[17.2rem] 2xl:w-[17.2rem] 3xl:h-[19.2rem] 3xl:w-[19.2rem] rounded-full text-center items-center flex mx-auto mt-[3rem] xl:mt-[6rem] bg-gradient-to-r from-cyan-500 to-blue-500 largeProfileImage transition-all duration-700 ease-in-out">
                            <img
                                class="h-[14rem] w-[14rem] 2xl:h-[16rem] 2xl:w-[16rem] 3xl:h-[18rem] 3xl:w-[18rem] rounded-full text-center mx-auto items-center flex"
                                src="https://avatars.githubusercontent.com/u/126382033?s=400&u=7687a3f9f1364708dd1c7f9ee1367a48695a9203&v=4" />
                        </div>
                        <div class="mx-auto mt-5 text-center">
                            <h2 id="mainName"
                                class="animate__animated animate__bounceInUp font-bold text-center text-4xl 2xl:text-5xl 3xl:text-6xl font-montserrat text-[#c4cfde]">Hi,
                                I’m Rayhan Al Shorif</h2>
                            <h5
                                class="text-[20px] 2xl:text-[25px] 3xl:text-[30px] font-poppins font-light py-2"><span
                                    class="text-[#c4cfde] mr-2">I am a</span><span
                                    class="text-[#ff014f]"
                                    id="designationTypeWriter"></span></h5>
                        </div>
                        <div
                            class="flex flex-col justify-center mx-auto mt-5 text-center lg:flex-row">
                            <a
                                class="box py-[15px] px-[35px] text-[14px] font-semibold rounded-[6px] uppercase mx-5 my-5 lg:my-0"
                                href="#resume"><span class="text-primary">resume</span></a>
                            <a
                                class="box py-[15px] px-[35px] text-[14px] font-semibold rounded-[6px] uppercase mx-5 my-5 lg:my-0"
                                href="#contacts"><span class="text-primary">contact
                                    me</span></a>
                        </div>
                        <div
                            class="h-[2px] w-[75%] my-10 mt-[5rem] mx-auto bg-[#000000]/40"></div>
                    </div>
                </div>
                <div id="whatIDo"></div>
                <div
                    class="h-[2px] w-[75%] my-10 mt-[5rem] mx-auto bg-[#000000]/40"></div>
                <div
                    class="flex flex-col items-center justify-center transition-all duration-700 ease-in-out"
                    id="portfolio">
                    <div class="justify-center py-10 mx-auto text-center">
                        <h4
                            class="justify-center py-1 text-sm font-medium tracking-wide text-center text-primarySub font-montserrat">VISIT
                            MY PORTFOLIO AND KEEP YOUR FEEDBACK</h4>
                        <h2
                            class="text-[#c4cfde] text-4xl 2xl:text-5xl 3xl:text-6xl font-bold font-montserrat tracking-wide py-5 justify-center text-center">
                            My Portfolio</h2>
                    </div>
                </div>
                <div
                    class="h-[2px] w-[75%] my-10 mx-auto bg-[#000000]/40"></div>
                <div id="myResume"></div>
                <div id="projects"></div>
                <div id="myBlog"></div>
                <div id="contactMe"></div>
                
                <script type="text/babel" src="{{asset('libs/portfolio/components.js')}}"></script>
                <script type="text/babel" src="{{asset('libs/portfolio/sidebar.js')}}"></script>
                <script type="text/babel"
                    src="{{asset('libs/portfolio/sideBarMobile.js')}}"></script>
                <script type="text/babel" src="{{asset('libs/portfolio/whatIDo.js')}}"></script>
                <script type="text/babel" src="{{asset('libs/portfolio/myResume.js')}}"></script>
                <script type="text/babel" src="{{asset('libs/portfolio/projects.js')}}"></script>
                <script type="text/babel" src="{{asset('libs/portfolio/myBlog.js')}}"></script>
                <script type="text/babel" src="{{asset('libs/portfolio/contactMe.js')}}"></script>
                <script src="{{asset('assets/particles/js/particles.js')}}"></script>
                <script src="{{asset('assets/particles/js/app.js')}}"></script>
                <script src="{{asset('js/script.js')}}"></script>
            </body>
</html>