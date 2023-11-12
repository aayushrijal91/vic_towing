<header class="relative">
    <nav class="container py-6 md:py-12">
        <div class="flex flex-row items-center justify-between">
            <div class="w-1/3 md:w-fit">
                <div class="flex flex-row items-center space-x-7">
                    <div class="w-full md:w-fit">
                        <a href="./">
                            <?= renderImg('logo.png', 'logo') ?>
                        </a>
                    </div>
                    <div class="w-1/2 lg:w-fit hidden lg:block">
                        <article class="bg-primary text-white text-sm font-semibold h-[60px] flex items-center justify-center rounded-full pl-3 pr-5 py-2 space-x-3 pointer-events-none">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="14.9144" cy="14.6868" r="14.658" fill="white" />
                                <g clip-path="url(#clip0_302_7)">
                                    <path d="M21.5472 10.0083H19.0285L16.1998 8.1095C16.2246 8.00868 16.2409 7.90521 16.2409 7.79732C16.2409 7.06593 15.6457 6.47073 14.9143 6.47073C14.1829 6.47073 13.5878 7.06593 13.5878 7.79732C13.5878 7.90521 13.6041 8.00913 13.6289 8.1095L10.8002 10.0083H8.28143C8.03689 10.0083 7.83923 10.2064 7.83923 10.4505V20.1787C7.83923 20.4228 8.03689 20.6209 8.28143 20.6209H21.5472C21.7918 20.6209 21.9894 20.4228 21.9894 20.1787V10.4505C21.9894 10.2064 21.7918 10.0083 21.5472 10.0083ZM12.2293 17.0834H9.70927V16.4661L10.557 15.6087C10.8612 15.2907 11.4714 14.7221 11.1437 14.4285C11.0465 14.3422 10.8214 14.3007 10.5649 14.4439C10.4535 14.5063 10.327 14.5987 10.1864 14.7203L9.67124 14.1171C9.84989 13.9571 10.0002 13.8425 10.1223 13.774C10.3951 13.6197 10.6852 13.5613 11.0036 13.5613C11.3962 13.5613 11.7982 13.6904 12.0166 14.0185C12.1895 14.2799 12.1953 14.6058 12.1117 14.8892C12.0321 15.1581 11.8628 15.3805 11.67 15.5826C11.5519 15.706 10.916 16.3095 10.916 16.3095H12.2293V17.0834ZM15.1911 16.4112H14.8086V17.0834H13.8823V16.4112H12.4973V15.7223L13.9415 13.6108H14.8086V15.7104H15.1911V16.4112ZM16.11 17.1307H15.2884L16.5827 13.5609H17.4048L16.11 17.1307ZM12.3868 10.0083L14.1144 8.84885C14.3377 9.01865 14.6128 9.1239 14.9143 9.1239C15.2159 9.1239 15.491 9.01865 15.7143 8.84885L17.4419 10.0083H12.3868ZM20.1052 14.1693L18.8821 17.0834H17.9111L19.1028 14.3926H17.5998V13.6161H20.1057L20.1052 14.1693Z" fill="#2AD347" />
                                    <path d="M13.8823 15.7108V15.3071C13.8823 15.2819 13.8924 14.8194 13.9035 14.7964C13.6908 15.1528 13.7235 15.0948 13.3101 15.7108H13.8823Z" fill="#2AD347" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_302_7">
                                        <rect width="14.1502" height="14.1502" fill="white" transform="translate(7.83923 6.47073)" />
                                    </clipPath>
                                </defs>
                            </svg>

                            <p>We Are Available 24/7</p>
                        </article>
                    </div>
                </div>
            </div>
            <div class="w-fit">
                <div class="flex flex-row items-center space-x-1 md:space-x-3">
                    <div class="w-fit hidden md:block">
                        <a href="#form" class="bg-dark-grey hover:bg-dark-grey-darker duration-150 text-white text-xl font-semibold h-[60px] md:min-w-[216px] flex items-center justify-center rounded-full p-3">Contact Us</a>
                    </div>
                    <div class="w-fit">
                        <a href="tel:<?= $phone_number ?>" class="bg-primary hover:bg-primary-dark duration-150 text-white text-sm md:text-xl font-semibold h-[35px] md:h-[60px] md:min-w-[216px] flex items-center justify-center rounded-full p-3"><?= $phone_number ?></a>
                    </div>
                    <div class="w-fit md:hidden">
                        <a href="mailto:<?= $admin_email ?>" class="bg-primary hover:bg-primary-dark duration-150 text-white text-xl font-semibold h-[35px] w-[35px] flex items-center justify-center rounded-full p-3">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.7029 5.20451C13.702 5.19868 13.702 5.19313 13.7008 5.1873C13.6935 5.15405 13.6798 5.12314 13.6617 5.09484C13.66 5.09193 13.6597 5.08843 13.658 5.08551C13.6559 5.0823 13.6524 5.08084 13.6501 5.07793C13.6308 5.05197 13.609 5.02776 13.5812 5.00909L13.5754 5.00501L13.5748 5.00472L7.16429 0.634094C7.06512 0.566427 6.93475 0.566427 6.83558 0.634094L0.425915 5.00443C0.425915 5.00443 0.42504 5.00501 0.424456 5.0053L0.418915 5.00909C0.391498 5.02776 0.369331 5.05197 0.350081 5.07793C0.347748 5.08113 0.344248 5.08259 0.342206 5.0858C0.340165 5.08872 0.340165 5.09222 0.338415 5.09514C0.320331 5.12372 0.306623 5.15434 0.299331 5.18759C0.298165 5.19343 0.298165 5.19897 0.29729 5.20451C0.294956 5.21968 0.291748 5.23455 0.291748 5.25001V11.9583C0.291748 12.7625 0.945956 13.4167 1.75008 13.4167H12.2501C13.0542 13.4167 13.7084 12.7625 13.7084 11.9583V5.25001C13.7084 5.23455 13.7052 5.21968 13.7029 5.20451ZM7.00008 1.22793L12.899 5.25001L7.00008 9.27209L1.10112 5.25001L7.00008 1.22793Z" fill="white" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section class="banner py-9 md:py-24 lg:py-40" data-aos="fade-up">
        <div class="container">
            <div class="flex justify-center pb-7 lg:hidden">
                <article class="bg-primary text-white text-sm font-semibold h-[60px] flex items-center justify-center rounded-full pl-3 pr-5 py-2 space-x-3 pointer-events-none">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="14.9144" cy="14.6868" r="14.658" fill="white" />
                        <g clip-path="url(#clip0_302_7)">
                            <path d="M21.5472 10.0083H19.0285L16.1998 8.1095C16.2246 8.00868 16.2409 7.90521 16.2409 7.79732C16.2409 7.06593 15.6457 6.47073 14.9143 6.47073C14.1829 6.47073 13.5878 7.06593 13.5878 7.79732C13.5878 7.90521 13.6041 8.00913 13.6289 8.1095L10.8002 10.0083H8.28143C8.03689 10.0083 7.83923 10.2064 7.83923 10.4505V20.1787C7.83923 20.4228 8.03689 20.6209 8.28143 20.6209H21.5472C21.7918 20.6209 21.9894 20.4228 21.9894 20.1787V10.4505C21.9894 10.2064 21.7918 10.0083 21.5472 10.0083ZM12.2293 17.0834H9.70927V16.4661L10.557 15.6087C10.8612 15.2907 11.4714 14.7221 11.1437 14.4285C11.0465 14.3422 10.8214 14.3007 10.5649 14.4439C10.4535 14.5063 10.327 14.5987 10.1864 14.7203L9.67124 14.1171C9.84989 13.9571 10.0002 13.8425 10.1223 13.774C10.3951 13.6197 10.6852 13.5613 11.0036 13.5613C11.3962 13.5613 11.7982 13.6904 12.0166 14.0185C12.1895 14.2799 12.1953 14.6058 12.1117 14.8892C12.0321 15.1581 11.8628 15.3805 11.67 15.5826C11.5519 15.706 10.916 16.3095 10.916 16.3095H12.2293V17.0834ZM15.1911 16.4112H14.8086V17.0834H13.8823V16.4112H12.4973V15.7223L13.9415 13.6108H14.8086V15.7104H15.1911V16.4112ZM16.11 17.1307H15.2884L16.5827 13.5609H17.4048L16.11 17.1307ZM12.3868 10.0083L14.1144 8.84885C14.3377 9.01865 14.6128 9.1239 14.9143 9.1239C15.2159 9.1239 15.491 9.01865 15.7143 8.84885L17.4419 10.0083H12.3868ZM20.1052 14.1693L18.8821 17.0834H17.9111L19.1028 14.3926H17.5998V13.6161H20.1057L20.1052 14.1693Z" fill="#2AD347" />
                            <path d="M13.8823 15.7108V15.3071C13.8823 15.2819 13.8924 14.8194 13.9035 14.7964C13.6908 15.1528 13.7235 15.0948 13.3101 15.7108H13.8823Z" fill="#2AD347" />
                        </g>
                        <defs>
                            <clipPath id="clip0_302_7">
                                <rect width="14.1502" height="14.1502" fill="white" transform="translate(7.83923 6.47073)" />
                            </clipPath>
                        </defs>
                    </svg>

                    <p>We Are Available 24/7</p>
                </article>
            </div>
            <h1 class="capitalize text-6xl lg:text-7xl xl:text-8xl text-white font-articulat-heavy text-center leading-none"><span class="text-primary">24/7 Prompt Emergency</span> Towing for all makes and models</h1>

            <p class="text-center text-white text-sm md:text-lg py-4 md:py-5">Our experienced team understands the challenges of unexpected breakdowns, and we're here to ensure your vehicle is safely transported to its destination</p>

            <div class="flex flex-wrap md:flex-nowrap md:flex-row items-center justify-center pt-4 md:space-x-5 gap-y-5">
                <article class="w-full md:w-fit bg-primary text-white font-semibold font-raleway capitalize rounded-full py-3 px-5 text-center">
                    Towing Arranged in under 60 minutes
                </article>
                <article class="w-full md:w-fit text-white font-semibold font-raleway capitalize text-center ">
                    Tows Starting from $90 | Fully Insured
                </article>
            </div>
        </div>
    </section>

    <div class="container pb-9 md:pb-12 lg:pb-24">
        <section class="form rounded-t-[30px] md:rounded-[30px] bg-dark-grey pt-12 pb-7 md:py-12 px-4 relative mx-5 lg:mx-0">
            <div class="flex flex-wrap justify-between items-center gap-y-8">
                <div class="w-full xl:w-5/12 md:px-6">
                    <h2 class="text-3xl md:text-5xl lg:text-7xl text-white font-articulat-heavy capitalize leading-none text-center xl:text-start">We specialize in <span class="text-primary">prompt and reliable</span> Assistance</h2>
                </div>

                <div class="w-full xl:w-7/12 md:px-6">
                    <form action="./src/form" method="POST" id="form">
                        <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse" />

                        <div class="flex flex-wrap gap-y-4">
                            <div class="w-full md:w-1/2 md:px-1">
                                <label for="fname">First name</label>
                                <input type="text" id="fname" name="fname" class="form-control" placeholder="Eg: John" required>
                            </div>
                            <div class="w-full md:w-1/2 md:px-1">
                                <label for="lname">Last name</label>
                                <input type="text" id="lname" name="lname" class="form-control" placeholder="Eg: Doe" required>
                            </div>
                            <div class="w-full md:w-1/2 md:px-1">
                                <label for="contactNumber">Contact Number</label>
                                <input type="text" id="contactNumber" name="contactNumber" class="form-control" placeholder="Eg: 0400 000 000" required>
                                <p class="text-sm text-red hidden" id="phoneError">Invalid Phone Number</p>
                            </div>
                            <div class="w-full md:w-1/2 md:px-1">
                                <label for="emailAddress">Email Address</label>
                                <input type="text" id="emailAddress" name="emailAddress" class="form-control" placeholder="Eg: example@email.com" required>
                            </div>
                            <div class="w-full md:px-1">
                                <button type="submit" class="bg-primary text-white w-full h-[47px] md:h-[57px] font-bold font-raleway text-lg">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?= renderImg('anchor.png', 'lib', 'absolute w-full start-0 bottom-[-29px] lg:bottom-[-40px] xl:bottom-[-66px] z-50 hidden md:block') ?>
            <?= renderImg('anchor-sm.png', 'lib', 'absolute w-full start-0 bottom-[-74px] z-50 md:hidden') ?>
        </section>

        <section class="services mt-5 md:mt-[-20px]">
            <div class="flex flex-wrap md:flex-nowrap md:flex-row md:space-x-3 gap-y-3 justify-center">
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <article class="min-h-[450px] md:min-h-[608px] h-full rounded-[20px] overflow-hidden relative">
                        <?= renderImg('emergency-towing.jpg', 'lib', 'h-full w-full object-cover object-center') ?>
                        <div class="overlay absolute w-full bottom-0">
                            <?= renderImg('slope.png', 'lib', 'w-full') ?>
                            <article class="bg-primary text-center p-5 lg:pb-12 text-white">
                                <h4 class="font-extrabold capitalize text-3xl xl:text-[40px] leading-none">24/7 prompt Emergency towing</h4>
                            </article>
                        </div>
                    </article>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <article class="min-h-[450px] md:min-h-[608px] h-full rounded-[20px] overflow-hidden relative">
                        <?= renderImg('60-mins-response.jpg', 'lib', 'h-full w-full object-cover object-center') ?>
                        <div class="overlay absolute w-full bottom-0">
                            <?= renderImg('slope.png', 'lib', 'w-full') ?>
                            <article class="bg-primary text-center p-5 lg:pb-12 text-white">
                                <h4 class="font-extrabold capitalize text-3xl xl:text-[40px] leading-none">60mins<br /> response time</h4>
                            </article>
                        </div>
                    </article>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <article class="min-h-[450px] md:min-h-[608px] h-full rounded-[20px] overflow-hidden relative">
                        <?= renderImg('no-hidden-cost.jpg', 'lib', 'h-full w-full object-cover object-center') ?>
                        <div class="overlay absolute w-full bottom-0">
                            <?= renderImg('slope.png', 'lib', 'w-full') ?>
                            <article class="bg-primary text-center p-5 lg:pb-12 text-white">
                                <h4 class="font-extrabold capitalize text-3xl xl:text-[40px] leading-none">No<br /> hidden costs</h4>
                            </article>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </div>
</header>

<section class="services bg-dark rounded-t-[30px] pt-12 md:pt-16 lg:pt-24 pb-7">
    <div class="container">
        <article data-aos="fade-up">
            <h2 class="text-center text-[40px] md:text-6xl lg:text-7xl xl:text-[80px] font-articulat-heavy leading-none text-white capitalize"><span class="text-primary">We are flexible, Affordable</span> And Cater to each Individual Client's Needs.</h2>

            <p class="text-white text-sm text-center leading-loose font-raleway mx-auto xl:w-9/12 py-7">Our experienced team understands the challenges of unexpected breakdowns, and we're here to ensure your vehicle is safely transported to its destination. With a focus on customer satisfaction, Vic Towing Group is committed to delivering seamless towing experiences whenever you require them.</p>

            <div class="flex flex-row items-center justify-center space-x-3">
                <div class="w-1/2 md:w-fit">
                    <a href="tel:<?= $phone_number ?>" class="bg-primary hover:bg-primary-dark duration-150 text-white text-sm md:text-xl font-semibold h-[60px] md:min-w-[216px] flex items-center justify-center gap-x-2 rounded-full p-3">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.7992 11.8498L10.1986 10.6175C9.92835 10.4886 9.62573 10.4588 9.33794 10.5327C9.05015 10.6065 8.7934 10.78 8.60775 11.0259L7.85829 12.0255C6.62958 11.1844 5.58363 10.0729 4.79057 8.76547L5.72764 7.96604C5.95798 7.76809 6.12045 7.49439 6.1897 7.18764C6.25896 6.88088 6.23111 6.55831 6.1105 6.2702L4.9619 3.48905C4.83305 3.17937 4.60525 2.92858 4.31914 2.78141C4.03304 2.63424 3.70722 2.60027 3.39981 2.68554L1.19832 3.29813C0.879291 3.3867 0.602062 3.59759 0.41965 3.89049C0.237237 4.18339 0.162442 4.53773 0.209567 4.88575C0.619809 7.92287 1.94114 10.7366 3.97579 12.9058C6.01044 15.075 8.64898 16.483 11.4965 16.919C11.8228 16.9683 12.1547 16.8876 12.4288 16.6922C12.7029 16.4969 12.8998 16.2007 12.982 15.8603L13.5563 13.512C13.6362 13.1842 13.6038 12.8367 13.465 12.532C13.3263 12.2274 13.0902 11.9855 12.7992 11.8498Z" fill="white" />
                            <path d="M9.76799 8.76543C9.76799 9.03621 9.86883 9.2959 10.0483 9.48737C10.2278 9.67884 10.4713 9.78641 10.7252 9.78641C10.979 9.78641 11.2225 9.67884 11.402 9.48737C11.5815 9.2959 11.6823 9.03621 11.6823 8.76543C11.6823 7.68231 11.2789 6.64355 10.5609 5.87767C9.84292 5.11179 8.86908 4.68152 7.85365 4.68152C7.5998 4.68152 7.35634 4.78909 7.17683 4.98056C6.99733 5.17203 6.89648 5.43172 6.89648 5.7025C6.89648 5.97328 6.99733 6.23297 7.17683 6.42444C7.35634 6.61591 7.5998 6.72348 7.85365 6.72348C8.36137 6.72348 8.84828 6.93861 9.20729 7.32155C9.5663 7.70449 9.76799 8.22387 9.76799 8.76543Z" fill="white" />
                            <path d="M7.85365 0.597656C7.5998 0.597656 7.35634 0.705223 7.17683 0.896694C6.99733 1.08816 6.89648 1.34785 6.89648 1.61863C6.89648 1.88942 6.99733 2.14911 7.17683 2.34058C7.35634 2.53205 7.5998 2.63961 7.85365 2.63961C9.37632 2.64124 10.8362 3.28716 11.9129 4.43563C12.9896 5.5841 13.5951 7.1413 13.5967 8.76548C13.5967 9.03627 13.6975 9.29595 13.877 9.48743C14.0565 9.6789 14.3 9.78646 14.5538 9.78646C14.8077 9.78646 15.0511 9.6789 15.2306 9.48743C15.4101 9.29595 15.511 9.03627 15.511 8.76548C15.5087 6.59999 14.7012 4.52388 13.2657 2.99264C11.8302 1.46141 9.8838 0.600088 7.85365 0.597656Z" fill="white" />
                        </svg>

                        <?= $phone_number ?>
                    </a>
                </div>
                <div class="w-1/2 md:w-fit">
                    <a href="#form" class="bg-primary hover:bg-primary-dark duration-150 text-white text-sm md:text-xl font-semibold h-[60px] md:min-w-[216px] flex items-center justify-center gap-x-2 rounded-full p-3">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.69783 10.3646C9.38561 10.545 9.03563 10.6395 8.67996 10.6395C8.32428 10.6395 7.9743 10.545 7.66208 10.3646L0.180664 6.04309V12.1391C0.180664 12.9347 0.479175 13.6978 1.01053 14.2604C1.54188 14.823 2.26255 15.1391 3.014 15.1391H14.3473C15.0988 15.1391 15.8194 14.823 16.3508 14.2604C16.8822 13.6978 17.1807 12.9347 17.1807 12.1391V6.04309L9.69783 10.3646Z" fill="white" />
                            <path d="M8.68066 8.38904C8.56236 8.38896 8.44595 8.3575 8.34208 8.29754L0.550414 3.79754C0.438576 3.7331 0.345211 3.63793 0.280143 3.52205C0.215075 3.40616 0.18071 3.27385 0.180664 3.13904C0.180664 2.34339 0.479175 1.58033 1.01053 1.01772C1.54188 0.455109 2.26255 0.139038 3.014 0.139038H14.3473C15.0988 0.139038 15.8194 0.455109 16.3508 1.01772C16.8822 1.58033 17.1807 2.34339 17.1807 3.13904C17.1808 3.2737 17.1466 3.40591 17.0818 3.52178C17.017 3.63765 16.9239 3.7329 16.8123 3.79754L9.02066 8.29754C8.91637 8.35774 8.79945 8.38921 8.68066 8.38904Z" fill="white" />
                        </svg>
                        Contact Us
                    </a>
                </div>
            </div>
        </article>

        <div class="flex flex-wrap xl:flex-nowrap xl:flex-row xl:space-x-3 gap-y-4 pt-20">
            <div class="w-full md:w-1/2 xl:w-1/4 md:px-1.5 xl:px-0">
                <article class="relative h-[470px] w-full rounded-xl overflow-hidden flex justify-center items-end">
                    <?= renderImg('emergency-breakdowns.jpg', 'lib', 'w-full h-full object-cover absolute') ?>

                    <div class="p-5 xl:p-9 relative w-full">
                        <p class="capitalize text-white border-2 h-[58px] text-center flex justify-center items-center w-full border-white rounded-full font-semibold text-base md:text-lg leading-none md:leading-none overflow-hidden p-2 pointer-events-none">
                            Emergency Breakdowns
                        </p>
                    </div>
                </article>
            </div>

            <div class="w-full md:w-1/2 xl:w-1/4 md:px-1.5 xl:px-0">
                <article class="relative h-[470px] w-full rounded-xl overflow-hidden flex justify-center items-end">
                    <?= renderImg('all-type-of-machinery.jpg', 'lib', 'w-full h-full object-cover absolute') ?>

                    <div class="p-5 xl:p-9 relative w-full">
                        <p class="capitalize text-white border-2 h-[58px] text-center flex justify-center items-center w-full border-white rounded-full font-semibold text-base md:text-lg leading-none md:leading-none overflow-hidden p-2 pointer-events-none">
                            All types of Machinery
                        </p>
                    </div>
                </article>
            </div>

            <div class="w-full md:w-1/2 xl:w-1/4 md:px-1.5 xl:px-0">
                <article class="relative h-[470px] w-full rounded-xl overflow-hidden flex justify-center items-end">
                    <?= renderImg('towing-containers.jpg', 'lib', 'w-full h-full object-cover absolute') ?>

                    <div class="p-5 xl:p-9 relative w-full">
                        <p class="capitalize text-white border-2 h-[58px] text-center flex justify-center items-center w-full border-white rounded-full font-semibold text-base md:text-lg leading-none md:leading-none overflow-hidden p-2 pointer-events-none">
                            Towing Containers & Pallets
                        </p>
                    </div>
                </article>
            </div>

            <div class="w-full md:w-1/2 xl:w-1/4 md:px-1.5 xl:px-0">
                <article class="relative h-[470px] w-full rounded-xl overflow-hidden flex justify-center items-end">
                    <?= renderImg('caravans-boats.jpg', 'lib', 'w-full h-full object-cover absolute') ?>

                    <div class="p-5 xl:p-9 relative w-full">
                        <p class="capitalize text-white border-2 h-[58px] text-center flex justify-center items-center w-full border-white rounded-full font-semibold text-base md:text-lg leading-none md:leading-none overflow-hidden p-2 pointer-events-none">
                            Caravans, boats and trailers
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary pb-5">
    <?= renderImg('anchor-dark.png', 'lib', 'w-full') ?>

    <div class="container pt-11 md:pt-16 lg:pt-20">
        <article data-aos="fade-up">
            <h2 class="text-center text-white font-articulat-heavy capitalize text-[40px] md:text-6xl lg:text-7xl xl:text-[80px] leading-none">Tow Trucks <span class="text-dark">That Go The extra mile</span></h2>

            <p class="text-white text-sm md:text-base text-center leading-loose font-raleway mx-auto xl:w-9/12 py-6">
                We understand the stress of having our vehicles break down when we least expect it. That is why at Vic Towing Group we are dedicated to providing all our clients with prompt service with towing arranged in under 60 minutes.
            </p>

            <div class="flex flex-row items-center justify-center space-x-3">
                <div class="w-1/2 md:w-fit">
                    <a href="tel:<?= $phone_number ?>" class="bg-white text-primary text-sm md:text-xl font-semibold h-[60px] md:min-w-[216px] flex items-center justify-center gap-x-2 rounded-full p-3">
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.7992 11.8498L10.1986 10.6175C9.92835 10.4886 9.62573 10.4588 9.33794 10.5327C9.05015 10.6065 8.7934 10.78 8.60775 11.0259L7.85829 12.0255C6.62958 11.1844 5.58363 10.0729 4.79057 8.76547L5.72764 7.96604C5.95798 7.76809 6.12045 7.49439 6.1897 7.18764C6.25896 6.88088 6.23111 6.55831 6.1105 6.2702L4.9619 3.48905C4.83305 3.17937 4.60525 2.92858 4.31914 2.78141C4.03304 2.63424 3.70722 2.60027 3.39981 2.68554L1.19832 3.29813C0.879291 3.3867 0.602062 3.59759 0.41965 3.89049C0.237237 4.18339 0.162442 4.53773 0.209567 4.88575C0.619809 7.92287 1.94114 10.7366 3.97579 12.9058C6.01044 15.075 8.64898 16.483 11.4965 16.919C11.8228 16.9683 12.1547 16.8876 12.4288 16.6922C12.7029 16.4969 12.8998 16.2007 12.982 15.8603L13.5563 13.512C13.6362 13.1842 13.6038 12.8367 13.465 12.532C13.3263 12.2274 13.0902 11.9855 12.7992 11.8498Z" fill="#2AD347" />
                            <path d="M9.76799 8.76543C9.76799 9.03621 9.86883 9.2959 10.0483 9.48737C10.2278 9.67884 10.4713 9.78641 10.7252 9.78641C10.979 9.78641 11.2225 9.67884 11.402 9.48737C11.5815 9.2959 11.6823 9.03621 11.6823 8.76543C11.6823 7.68231 11.2789 6.64355 10.5609 5.87767C9.84292 5.11179 8.86908 4.68152 7.85365 4.68152C7.5998 4.68152 7.35634 4.78909 7.17683 4.98056C6.99733 5.17203 6.89648 5.43172 6.89648 5.7025C6.89648 5.97328 6.99733 6.23297 7.17683 6.42444C7.35634 6.61591 7.5998 6.72348 7.85365 6.72348C8.36137 6.72348 8.84828 6.93861 9.20729 7.32155C9.5663 7.70449 9.76799 8.22387 9.76799 8.76543Z" fill="#2AD347" />
                            <path d="M7.85365 0.597656C7.5998 0.597656 7.35634 0.705223 7.17683 0.896694C6.99733 1.08816 6.89648 1.34785 6.89648 1.61863C6.89648 1.88942 6.99733 2.14911 7.17683 2.34058C7.35634 2.53205 7.5998 2.63961 7.85365 2.63961C9.37632 2.64124 10.8362 3.28716 11.9129 4.43563C12.9896 5.5841 13.5951 7.1413 13.5967 8.76548C13.5967 9.03627 13.6975 9.29595 13.877 9.48743C14.0565 9.6789 14.3 9.78646 14.5538 9.78646C14.8077 9.78646 15.0511 9.6789 15.2306 9.48743C15.4101 9.29595 15.511 9.03627 15.511 8.76548C15.5087 6.59999 14.7012 4.52388 13.2657 2.99264C11.8302 1.46141 9.8838 0.600088 7.85365 0.597656Z" fill="#2AD347" />
                        </svg>

                        <?= $phone_number ?>
                    </a>
                </div>
                <div class="w-1/2 md:w-fit">
                    <a href="#form" class="bg-white text-primary text-sm md:text-xl font-semibold h-[60px] md:min-w-[216px] flex items-center justify-center gap-x-2 rounded-full p-3">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.69783 10.3646C9.38561 10.545 9.03563 10.6395 8.67996 10.6395C8.32428 10.6395 7.9743 10.545 7.66208 10.3646L0.180664 6.04309V12.1391C0.180664 12.9347 0.479175 13.6978 1.01053 14.2604C1.54188 14.823 2.26255 15.1391 3.014 15.1391H14.3473C15.0988 15.1391 15.8194 14.823 16.3508 14.2604C16.8822 13.6978 17.1807 12.9347 17.1807 12.1391V6.04309L9.69783 10.3646Z" fill="#2AD347" />
                            <path d="M8.68066 8.38904C8.56236 8.38896 8.44595 8.3575 8.34208 8.29754L0.550414 3.79754C0.438576 3.7331 0.345211 3.63793 0.280143 3.52205C0.215075 3.40616 0.18071 3.27385 0.180664 3.13904C0.180664 2.34339 0.479175 1.58033 1.01053 1.01772C1.54188 0.455109 2.26255 0.139038 3.014 0.139038H14.3473C15.0988 0.139038 15.8194 0.455109 16.3508 1.01772C16.8822 1.58033 17.1807 2.34339 17.1807 3.13904C17.1808 3.2737 17.1466 3.40591 17.0818 3.52178C17.017 3.63765 16.9239 3.7329 16.8123 3.79754L9.02066 8.29754C8.91637 8.35774 8.79945 8.38921 8.68066 8.38904Z" fill="#2AD347" />
                        </svg>
                        Contact Us
                    </a>
                </div>
            </div>
        </article>
    </div>
</section>
<?= renderImg('towed-car.png', 'lib', 'w-full hidden md:block') ?>
<?= renderImg('towed-car-sm.png', 'lib', 'w-full md:hidden') ?>

<section class="bg-dark-grey py-14 md:py-24 rounded-[30px]">
    <div class="container" data-aos="fade-up">
        <div class="flex flex-wrap xl:flex-row xl:flex-nowrap justify-between items-center gap-y-4">
            <div class="w-full xl:w-7/12">
                <h3 class="text-white capitalize font-articulat-heavy text-[33px] md:text-6xl lg:text-7xl xl:text-[80px] leading-none text-center xl:text-start"><span class="text-primary">Same Day</span><br class="hidden lg:block" /> Emergency service</h3>
            </div>
            <div class="w-full xl:w-5/12">
                <p class="text-white text-sm md:text-2xl text-center xl:text-start">
                    That is why at Vic Towing Group we are dedicated to providing all our clients with prompt service with towing arranged in under 60 minutes.
                </p>

                <div class="flex flex-row items-center justify-center xl:justify-start space-x-3 pt-7">
                    <div class="w-1/2 md:w-fit">
                        <a href="tel:<?= $phone_number ?>" class="bg-primary hover:bg-primary-dark duration-150 text-white text-sm md:text-xl font-semibold h-[60px] md:min-w-[216px] flex items-center justify-center gap-x-2 rounded-full p-3">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.7992 11.8498L10.1986 10.6175C9.92835 10.4886 9.62573 10.4588 9.33794 10.5327C9.05015 10.6065 8.7934 10.78 8.60775 11.0259L7.85829 12.0255C6.62958 11.1844 5.58363 10.0729 4.79057 8.76547L5.72764 7.96604C5.95798 7.76809 6.12045 7.49439 6.1897 7.18764C6.25896 6.88088 6.23111 6.55831 6.1105 6.2702L4.9619 3.48905C4.83305 3.17937 4.60525 2.92858 4.31914 2.78141C4.03304 2.63424 3.70722 2.60027 3.39981 2.68554L1.19832 3.29813C0.879291 3.3867 0.602062 3.59759 0.41965 3.89049C0.237237 4.18339 0.162442 4.53773 0.209567 4.88575C0.619809 7.92287 1.94114 10.7366 3.97579 12.9058C6.01044 15.075 8.64898 16.483 11.4965 16.919C11.8228 16.9683 12.1547 16.8876 12.4288 16.6922C12.7029 16.4969 12.8998 16.2007 12.982 15.8603L13.5563 13.512C13.6362 13.1842 13.6038 12.8367 13.465 12.532C13.3263 12.2274 13.0902 11.9855 12.7992 11.8498Z" fill="white" />
                                <path d="M9.76799 8.76543C9.76799 9.03621 9.86883 9.2959 10.0483 9.48737C10.2278 9.67884 10.4713 9.78641 10.7252 9.78641C10.979 9.78641 11.2225 9.67884 11.402 9.48737C11.5815 9.2959 11.6823 9.03621 11.6823 8.76543C11.6823 7.68231 11.2789 6.64355 10.5609 5.87767C9.84292 5.11179 8.86908 4.68152 7.85365 4.68152C7.5998 4.68152 7.35634 4.78909 7.17683 4.98056C6.99733 5.17203 6.89648 5.43172 6.89648 5.7025C6.89648 5.97328 6.99733 6.23297 7.17683 6.42444C7.35634 6.61591 7.5998 6.72348 7.85365 6.72348C8.36137 6.72348 8.84828 6.93861 9.20729 7.32155C9.5663 7.70449 9.76799 8.22387 9.76799 8.76543Z" fill="white" />
                                <path d="M7.85365 0.597656C7.5998 0.597656 7.35634 0.705223 7.17683 0.896694C6.99733 1.08816 6.89648 1.34785 6.89648 1.61863C6.89648 1.88942 6.99733 2.14911 7.17683 2.34058C7.35634 2.53205 7.5998 2.63961 7.85365 2.63961C9.37632 2.64124 10.8362 3.28716 11.9129 4.43563C12.9896 5.5841 13.5951 7.1413 13.5967 8.76548C13.5967 9.03627 13.6975 9.29595 13.877 9.48743C14.0565 9.6789 14.3 9.78646 14.5538 9.78646C14.8077 9.78646 15.0511 9.6789 15.2306 9.48743C15.4101 9.29595 15.511 9.03627 15.511 8.76548C15.5087 6.59999 14.7012 4.52388 13.2657 2.99264C11.8302 1.46141 9.8838 0.600088 7.85365 0.597656Z" fill="white" />
                            </svg>

                            <?= $phone_number ?>
                        </a>
                    </div>
                    <div class="w-1/2 md:w-fit">
                        <a href="#form" class="bg-primary hover:bg-primary-dark duration-150 text-white text-sm md:text-xl font-semibold h-[60px] md:min-w-[216px] flex items-center justify-center gap-x-2 rounded-full p-3">
                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.69783 10.3646C9.38561 10.545 9.03563 10.6395 8.67996 10.6395C8.32428 10.6395 7.9743 10.545 7.66208 10.3646L0.180664 6.04309V12.1391C0.180664 12.9347 0.479175 13.6978 1.01053 14.2604C1.54188 14.823 2.26255 15.1391 3.014 15.1391H14.3473C15.0988 15.1391 15.8194 14.823 16.3508 14.2604C16.8822 13.6978 17.1807 12.9347 17.1807 12.1391V6.04309L9.69783 10.3646Z" fill="white" />
                                <path d="M8.68066 8.38904C8.56236 8.38896 8.44595 8.3575 8.34208 8.29754L0.550414 3.79754C0.438576 3.7331 0.345211 3.63793 0.280143 3.52205C0.215075 3.40616 0.18071 3.27385 0.180664 3.13904C0.180664 2.34339 0.479175 1.58033 1.01053 1.01772C1.54188 0.455109 2.26255 0.139038 3.014 0.139038H14.3473C15.0988 0.139038 15.8194 0.455109 16.3508 1.01772C16.8822 1.58033 17.1807 2.34339 17.1807 3.13904C17.1808 3.2737 17.1466 3.40591 17.0818 3.52178C17.017 3.63765 16.9239 3.7329 16.8123 3.79754L9.02066 8.29754C8.91637 8.35774 8.79945 8.38921 8.68066 8.38904Z" fill="white" />
                            </svg>
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<iframe class="w-full h-[754px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d402590.5160618202!2d144.72350147732487!3d-37.97156521321773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC!5e0!3m2!1sen!2sau!4v1699528201333!5m2!1sen!2sau" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>