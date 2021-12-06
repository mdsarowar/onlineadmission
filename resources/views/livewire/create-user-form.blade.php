<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a new account') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $pages[$currentPage]['heading'] }}</h3>
                        <p class="mt-1 text-sm text-gray-600">{{ $pages[$currentPage]['subheading'] }}</p>
                    </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        @if ($errors->isNotEmpty())    
                            <div class="text-sm bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                                <strong class="font-bold">Oops!</strong>
                                <span class="block sm:inline">There are some errors with your submission.</span>
                            </div>
                        @endif
                        @if ($success)
                            <div class="text-sm bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                                <span class="block sm:inline">{{ $success }}</span>
                                <span wire:click="resetSuccess" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                </span>
                            </div>
                        @endif
                        <form wire:submit.prevent="submit">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    @if ($currentPage === 1)    
                                        <div class="flex flex-col">
                                            <div class="w-full py-2">
                                            <label>Department <sup>(required)</sup></label>
                                                    <select  wire:model.lazy="departmentname"  id="department" name="department" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                                                     <option disabled="" selected="">Select a department</option>

                                                            <optgroup label="School of Science & Engineering">
                                                            <option selected="" >Select a department</option>
                                                                <option value="deee">Department of Electrical & Electronic
                                                                    Engineering
                                                                </option>
                                                                <option value="dcse">Department of Computer Science &
                                                                    Engineering
                                                                </option>
                                                                <option value="dpha">Department of Pharmacy</option>
                                                                <option value="dtex">Department of Textile Engineering
                                                                </option>
                                                                <option value="darc">Department of Architecture</option>
                                                            </optgroup>

                                                            <optgroup label="Southeast Business School">
                                                                <option value="sbba">Bachelor of Business Administration
                                                                </option>
                                                                <option value="smba">Master of Business Administration
                                                                </option>
                                                            </optgroup>

                                                            <optgroup label="School of Arts & Social Sciences">
                                                                <option value="dlaw">Department of Law & Justice
                                                                </option>
                                                                <option value="deng">Department of English</option>
                                                                <option value="dban">Department of Bangla</option>
                                                                <option value="deco">Department of Economics</option>
                                                            </optgroup>
                                                    </select>

                                    
                                               <!-- @error('firstName') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Program </label><br>
                                                    <select wire:model.lazy="depprogram" id="program"  name="program" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                        <option disabled="" selected="">Select a program</option>
                                                        <optgroup label="School of Science & Engineering">
                                                        <option selected="" >Select a program</option>
                                                            <option value="bsc">B Sc</option>
                                                            <option value="msc">M Sc</option>
                                                            
                                                        </optgroup>
                                                    </select>
                                               <!-- @error('firstName') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                                <label>semester </label><br>
                                                    <select wire:model.lazy="semester" id="program"  name="program" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                        <option disabled="" selected="">Select a semester</option>
                                                        <optgroup label="School of Science & Engineering">
                                                        <option  selected="">Select a semester</option>
                                                            <option value="spr">spring </option>
                                                            <option value="fal">Fall</option>
                                                            <option value="sum">summer</option>
                                                            
                                                        </optgroup>
                                                    </select>
                                                
                                                <!-- @error('password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>


                                            <!-- <div class="w-full py-2">
                                            <label>How did you know about Southeast
                                                        University? <sup>(required)</sup></label>
                                                    <select class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="source" name="source" wire:model="aboutknow">
                                                        <option disabled selected>Select a option</option>
                                                        <optgroup label="School of Science & Engineering">
                                                            <option value="bsc">B Sc</option>
                                                            <option value="msc">M Sc</option>
                                                            
                                                        </optgroup>
                                                    </select>
                                               @error('firstName') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div> -->
                                            <!-- <div class="w-full py-2">
                                            <label id="news-bot-label"> <sup>(required)</sup></label>
                                                    <select class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" name="reference" id="news-bot-select">
                                                        <option disabled selected>select name of the honorable BOT member
                                                        </option>
                                                    </select>
                                               @error('firstName') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div> -->
                                            <!-- <div class="w-full py-2">
                                                    <label id="eligible-checkbox" class="eligible-checkbox">
                                                        <input  id="eligible" name="eligible" type="checkbox" value="">
                                                        I read all these requirements and I am eligible for
                                                        applying.
                                                        <span class="checkmark"></span>
                                                    </label>
                                               @error('firstName') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div> -->
                                            <!-- <div class="w-full py-2">
                                                <label for="first_name" class="block text-sm font-medium text-gray-700">First name</label>
                                                <input wire:model.lazy="firstName" type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('firstName') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="last_name" class="block text-sm font-medium text-gray-700">Last name</label>
                                                <input wire:model.lazy="lastName" type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('lastName') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="email_address" class="block text-sm font-medium text-gray-700">Email address</label>
                                                <input wire:model.lazy="email" type="text" name="email_address" id="email_address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('email') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div> -->
                                        </div>
                                    
                                    @elseif ($currentPage === 2)
                                        <!-- Basic Information -->
                                        <div class="flex flex-col">
                                            <div class="w-full py-2">
                                             <label>First Name <sup>(required)</sup></label>
                                                <input wire:model.lazy="firstname" id="firstname" name="firstname" type="text" placeholder="First Name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    
                                                <!-- @error('password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                              <label>Last Name</label>
                                                <input wire:model.lazy="lastname" id="lastname" name="lastname" type="text" placeholder="Last Name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">  
                                                <!-- @error('password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Mobile Number <sup>(required)</sup></label>
                                                        <input wire:model.lazy="stphone" id="phone" name="phone" type="text" 
                                                               maxlength="14" minlength="10" placeholder="01781408753" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                   <!-- @error('password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Email <sup>(required)</sup></label>
                                                        <input wire:model.lazy="stemail" id="email" name="email" type="email"
                                                                placeholder="example@gmail.com" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                   <!-- @error('password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Gender <sup>(required)</sup></label>
                                                        <select wire:model.lazy="stgender" id="gender" name="gender" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                            <option selected>Select gender
                                                            </option>
                                                            <option value="MALE">Male</option>
                                                            <option value="FEMALE"> Female</option>
                                                            <option value="OTHERS"> None</option>
                                                        </select>
                                                        <!-- @error('password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <!-- <div class="w-full py-2">
                                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                                <input wire:model.lazy="password" type="password" name="password" id="password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="w-full py-2">
                                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                                                <input wire:model.lazy="confirmPassword" type="password" name="password_confirmation" id="password_confirmation" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div> -->
                                        </div>
                                    
                                    @elseif ($currentPage === 3)
                                        <!-- educational Information -->
                                        <div class="flex flex-col">
                                            <div class="col-sm-12">
                                                <h5 class="info-text" style="font-weight: bolder;"> Secondary
                                                    Educational Information </h5>
                                            </div>

                                            <div class="w-full py-2">
                                              <label>Exam/Degree Title <sup>(required)</sup></label>
                                                        <select wire:model.lazy="ssctype" id="sscexamtitle" name="sscexamtitle" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                            <option >Select exam/degree title
                                                            </option>
                                                            <option value="SSC">SSC</option>
                                                            <option value="O_LEVEL">O Level</option>
                                                            <option value="DAKHIL">Dakhil (Madrasha)</option>
                                                            <option value="SSC_VOCATIONAL">SSC (Vocational)</option>
                                                        </select>
                                                <!-- @error('password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                              
                                              <label>Concentration/Major/Group <sup>(required)</sup></label>
                                                        <input wire:model.lazy="sscgroup" id="sscconcentration" name="sscconcentration"
                                                               type="text" 
                                                               placeholder="Science / Commerce / Arts" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    <!-- @error('password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Institute Name <sup>(required)</sup></label>
                                                        <input wire:model.lazy="hcsschoolname" id="sscinstitutename" name="sscinstitutename"
                                                               type="text"  id="instituteName"
                                                               placeholder="Write your institute name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    <!-- @error('password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Board <sup>(required)</sup></label>
                                                        <input wire:model.lazy="sscboard" id="sscboard" name="sscboard" type="text"
                                                                id="sscBorad" placeholder="Dhaka"class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    <!-- @error('password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            
                                            <div class="w-full py-2">
                                            <label>GPA <sup>(required)</sup></label>
                                                        <input wire:model.lazy="sscgpa" id="sscgpa" name="sscgpa" type="number" max="5" min="1"
                                                               placeholder="4.63"
                                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                               <!-- @error('password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>GPA without 4th Subject <sup>(required)</sup></label>
                                                        <input wire:model.lazy="sscgradesub4" id="sscgpa4subject" name="sscgpa4subject" max="5" min="1"
                                                               placeholder="4.30"
                                                               type="number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    
                                                               <!-- @error('password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Scale <sup>(required)</sup></label>
                                                        <input  id="sscscale" name="sscscale" type="number"
                                                               placeholder="5.00"
                                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                               <!-- @error('password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Roll Number <sup>(required)</sup></label>
                                                        <input wire:model.lazy="sscrollnumber" id="sscroll" name="sscroll" type="number"
                                                               placeholder="124814"
                                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                   <!-- @error('password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            
                                            <div class="w-full py-2">
                                            <label>Registration Number <sup>(required)</sup></label>
                                                        <input wire:model.lazy="sscregnumber" id="sscregistration" name="sscregistration"
                                                               placeholder="518411"
                                                               type="number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    <!-- @error('password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Passing Year <sup>(required)</sup></label>
                                                        <select wire:model.lazy="sscpasyear" id="sscpassingyear" name="sscpassingyear"
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                            <option value=""> Select year
                                                            </option>
                                                            <option value="2021"> 2021</option>
                                                            <option value="2020"> 2020</option>
                                                            <option value="2019"> 2019</option>
                                                            <option value="2018"> 2018</option>
                                                            <option value="2017"> 2017</option>
                                                            <option value="2016"> 2016</option>
                                                            <option value="2015"> 2015</option>
                                                            <option value="2014"> 2014</option>
                                                            <option value="2013"> 2013</option>
                                                            <option value="2012"> 2012</option>
                                                            <option value="2011"> 2011</option>
                                                            <option value="2010"> 2010</option>
                                                            <option value="2009"> 2009</option>
                                                            <option value="2008"> 2008</option>
                                                            <option value="2007"> 2007</option>
                                                            <option value="2006"> 2006</option>
                                                            <option value="2005"> 2005</option>
                                                            <option value="2004"> 2004</option>
                                                            <option value="2003"> 2003</option>
                                                            <option value="2002"> 2002</option>
                                                            <option value="2001"> 2001</option>
                                                            <option value="2000"> 2000</option>
                                                        </select>
                                                        <!-- @error('password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label style="font-size: 12px;">Duration (Yrs)
                                                            <sup>(required)</sup></label>
                                                        <input wire:model.lazy="sscduration" id="sscduration" name="sscduration" type="number"
                                                               placeholder="10"
                                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    <!-- @error('password') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <!-- Higher Secondary Information -->
                                            <div class="w-full py-2">
                                            <h5 class="info-text" style="font-weight: bolder;"> Higher Secondary
                                                    Educational Information
                                                </h5>
                                                </div>
                                            <div class="w-full py-2">
                                            <label>Exam/Degree Title <sup>(required)</sup></label>
                                                        <select wire:model.lazy="hscexmtype" id="hscexamtitle" name="hscexamtitle"
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                            <option value="">Select exam/degree title
                                                            </option>
                                                            <option value="HSC">HSC</option>
                                                            <option value="A_LEVEL">A Level</option>
                                                            <option value="ALIM">Alim (Madrasha)</option>
                                                            <option value="HSC_VOCATIONAL">HSC (Vocational)</option>
                                                        </select>
                                                         <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Concentration/Major/Group <sup>(required)</sup></label>
                                                        <input wire:model.lazy="hscgroup" id="hscconcentration" name="hscconcentration"
                                                               placeholder="Science / Commerce / Arts"
                                                               type="text" placeholder="Science" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                   
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Institute Name <sup>(required)</sup></label>
                                                        <input wire:model.lazy="hcsschoolname" name="hscinstitutename" type="text"
                                                               placeholder="Write your institute name"
                                                                id="hscInstituteName" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                   
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Board <sup>(required)</sup></label>
                                                        <input wire:model.lazy="hscboard" name="hscboard" type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                               id="hscboard" >
                                                  
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Letter Grade <sup>(required)</sup></label>
                                                        <select wire:model.lazy="hscgrade" id="hsclettergrade" name="hsclettergrade"
                                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                                                            <option value="">Select grade
                                                            </option>
                                                            <option value="A_PLUS"> A+</option>
                                                            <option value="A"> A</option>
                                                            <option value="A_MINUS"> A-</option>
                                                            <option value="B"> B</option>
                                                            <option value="C"> C</option>
                                                            <option value="D"> D</option>
                                                            <option value="F"> F</option>
                                                        </select>
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>GPA <sup>(required)</sup></label>
                                                        <input wire:model.lazy="hscgpa" id="hscgpa" name="hscgpa" type="number" max="5" min="1"
                                                               placeholder="4.81"
                                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                                                   
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>GPA without 4th Subject <sup>(required)</sup></label>
                                                        <input wire:model.lazy="hscgpa4" id="hscgpa4subject" name="hscgpa4subject" max="5" min="1"
                                                               placeholder="4.65"
                                                               type="number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            
                                            <div class="w-full py-2">
                                            <label>Roll Number <sup>(required)</sup></label>
                                                        <input wire:model.lazy="hscrollnumber" id="hscroll" name="hscroll" type="number"
                                                               placeholder="452356"
                                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                                                    
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Registration Number <sup>(required)</sup></label>
                                                        <input wire:model.lazy="hscregnumber" id="hscregistration" name="hscregistration"
                                                               placeholder="6758657"
                                                               type="number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                                                  
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Passing Year <sup>(required)</sup></label>
                                                        <select wire:model.lazy="hscpasyear" id="hscpassingyear" name="hscpassingyear"
                                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                            <option value="">Select year
                                                            </option>
                                                            <option value="2021"> 2021</option>
                                                            <option value="2020"> 2020</option>
                                                            <option value="2019"> 2019</option>
                                                            <option value="2018"> 2018</option>
                                                            <option value="2017"> 2017</option>
                                                            <option value="2016"> 2016</option>
                                                            <option value="2015"> 2015</option>
                                                            <option value="2014"> 2014</option>
                                                            <option value="2013"> 2013</option>
                                                            <option value="2012"> 2012</option>
                                                            <option value="2011"> 2011</option>
                                                            <option value="2010"> 2010</option>
                                                            <option value="2009"> 2009</option>
                                                            <option value="2008"> 2008</option>
                                                            <option value="2007"> 2007</option>
                                                            <option value="2006"> 2006</option>
                                                            <option value="2005"> 2005</option>
                                                            <option value="2004"> 2004</option>
                                                            <option value="2003"> 2003</option>
                                                            <option value="2002"> 2002</option>
                                                            <option value="2001"> 2001</option>
                                                            <option value="2000"> 2000</option>
                                                        </select>
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label style="font-size: 12px;">Duration(Yrs)
                                                            <sup>(required)</sup></label>
                                                        <input wire:model.lazy="hscduration" id="hscduration" name="hscduration" type="number"
                                                               placeholder="2"
                                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                                                     
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            
                                                <!-- Doploma Education Information -->
                                            <div class="w-full py-2">
                                            <h5 class="info-text" style="font-weight: bolder;"> Diploma Educational
                                                    Information </h5>
                                                 </div>
                                            <div class="w-full py-2">
                                                <div class="col-sm-12" style="margin-top: 0; text-align: center;">
                                                    <sup>(Fill up only if you don't have higher secondary information)</sup>
                                                </div>
                                               
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Exam/Degree Title <sup>(required)</sup></label>
                                                        <select wire:model.lazy="diploma" id="dmaexamtitle" name="dmaexamtitle"
                                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                                                            <option value="">Select exam/degree title
                                                            </option>
                                                            <option value="DIPLOMA_ENGINEERING">Diploma in
                                                                Engineering
                                                            </option>
                                                            <option value="DIPLOMA_MEDICAL_TECHNOLOGY">Diploma in
                                                                Medical
                                                                Technology
                                                            </option>
                                                            <option value="DIPLOMA_NURSING">Diploma in Nursing
                                                            </option>
                                                            <option value="DIPLOMA_COMMERCE">Diploma in Commerce
                                                            </option>
                                                            <option value="DIPLOMA_BUSINESS_STUDIES">Diploma in
                                                                Business Studies
                                                            </option>
                                                            <option value="DIPLOMA_GRADUATE_DIPLOMA">Post Graduate
                                                                Diploma (PGD)
                                                            </option>
                                                            <option value="DIPLOMA_PATHOLOGY">Diploma in Pathology
                                                            </option>
                                                            <option value="DIPLOMA_VOCATIONAL">Diploma (Vocational)
                                                            </option>
                                                        </select>
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Concentration/Major/Group <sup>(required)</sup></label>
                                                        <input wire:model.lazy="diplogroup" id="dmaconcentration" name="dmaconcentration"
                                                               type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                               placeholder="Computer Science" wire:model="diplogroup">
                                                    
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Institute Name <sup>(required)</sup></label>
                                                        <input wire:model.lazy="diploschoolname" name="dmainstitutename" type="text"
                                                               placeholder="Write your institute name"
                                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="dmaInstituteName">
                                                    
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>CGPA <sup>(required)</sup></label>
                                                        <input wire:model.lazy="diplocgpa" id="dmacgpa" name="dmacgpa" type="number"
                                                               placeholder="3.53"
                                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                                                    
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Scale <sup>(required)</sup></label>
                                                        <input wire:model.lazy="diplogradescale" id="dmascale" name="dmascale" type="number"
                                                               placeholder="4.00"
                                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                                                    
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Letter Grade <sup>(required)</sup></label>
                                                        <select wire:model.lazy="diploletergrade" id="dmalettergrade" name="dmalettergrade"
                                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                                                            <option value="">Select grade
                                                            </option>
                                                            <option value="A_PLUS"> A+</option>
                                                            <option value="A"> A</option>
                                                            <option value="A_MINUS"> A-</option>
                                                            <option value="B"> B</option>
                                                            <option value="C"> C</option>
                                                            <option value="D"> D</option>
                                                            <option value="F"> F</option>
                                                        </select>
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            
                                            <div class="w-full py-2">
                                            <label>Passing Year <sup>(required)</sup></label>
                                                        <select wire:model.lazy="diplopasyear" id="dmapassingyear" name="dmapassingyear"
                                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                                                            <option value="">Select year
                                                            </option>
                                                            <option value="2021"> 2021</option>
                                                            <option value="2020"> 2020</option>
                                                            <option value="2019"> 2019</option>
                                                            <option value="2018"> 2018</option>
                                                            <option value="2017"> 2017</option>
                                                            <option value="2016"> 2016</option>
                                                            <option value="2015"> 2015</option>
                                                            <option value="2014"> 2014</option>
                                                            <option value="2013"> 2013</option>
                                                            <option value="2012"> 2012</option>
                                                            <option value="2011"> 2011</option>
                                                            <option value="2010"> 2010</option>
                                                            <option value="2009"> 2009</option>
                                                            <option value="2008"> 2008</option>
                                                            <option value="2007"> 2007</option>
                                                            <option value="2006"> 2006</option>
                                                            <option value="2005"> 2005</option>
                                                            <option value="2004"> 2004</option>
                                                            <option value="2003"> 2003</option>
                                                            <option value="2002"> 2002</option>
                                                            <option value="2001"> 2001</option>
                                                            <option value="2000"> 2000</option>
                                                        </select>
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label style="font-size: 12px;">Duration(Yrs) </label>
                                                        <input wire:model.lazy="diploduration" id="dmaduration" name="dmaduration" type="number"
                                                               placeholder="3"
                                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                                                   
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                             <!-- Bachelor/Honors Information -->
                                            <div class="w-full py-2">
                                            <div class="col-sm-12">
                                                <h5 class="info-text" style="font-weight: bolder;">Bachelor/Honors
                                                    Educational Information </h5>
                                            </div>
                                               
                                        
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Exam/Degree Title <sup>(required)</sup></label>
                                                        <select wire:model.lazy="bsctype" id="bclrdegreetitle" name="bclrdegreetitle"
                                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                                                            <option value="">Select exam/degree title
                                                            </option>
                                                            <option value="BSC">Bachelor of Science (BSC)
                                                            </option>
                                                            <option value="BA">Bachelor of Arts (BA)</option>
                                                            <option value="BCOM">Bachelor of Commerce (BCom)
                                                            </option>
                                                            <option value="BBA">Bachelor of Business
                                                                Administration (BBA)
                                                            </option>
                                                            <option value="MBBS">Bachelor of Medicine and
                                                                Bachelor of Surgery (MBBS)
                                                            </option>
                                                            <option value="BDS">Bachelor of Dental Surgery (BDS)
                                                            </option>
                                                            <option value="BARCH">Bachelor of Architecture
                                                                (B.Arch)
                                                            </option>
                                                            <option value="BPHARM">Bachelor of Pharmacy (B.Pharm)
                                                            </option>
                                                            <option value="BED">Bachelor of Education (B.Edu)
                                                            </option>
                                                            <option value="BPED">Bachelor of Physical Education
                                                                (BPEd)
                                                            </option>
                                                            <option value="LLB">Bachelor of Law (LLB)
                                                            </option>
                                                            <option value="DVM">Doctor of Veterinary Medicine
                                                                (DVM)
                                                            </option>
                                                            <option value="BSS">Bachelor of Social Science (BSS)
                                                            </option>
                                                            <option value="BFA">Bachelor of Fine Arts (B.F.A)
                                                            </option>
                                                            <option value="BBS">Bachelor of Business Studies
                                                                (BBS)
                                                            </option>
                                                            <option value="BCA">Bachelor of Computer Application
                                                                (BCA)
                                                            </option>
                                                            <option value="FAZIL">Fazil (Madrasah)
                                                            </option>
                                                            <option value="BENGG">Bachelor in Engineering (BEngg)
                                                            </option>
                                                        </select>
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Concentration/Major/Group <sup>(required)</sup></label>
                                                        <input wire:model.lazy="bscgroup" id="bclrconcentration" name="bclrconcentration"
                                                               type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                               placeholder="Computer Science and Engineering" wire:model="bscgroup">
                                                  
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Institute Name <sup>(required)</sup></label>
                                                        <input wire:model.lazy="bscschool" name="bclrinstitutename" type="text"
                                                               placeholder="Write your institute name"
                                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" id="bclrInstituteName" >
                                                   
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>CGPA <sup>(required)</sup></label>
                                                        <input wire:model.lazy="bsccgpa" id="bclrcgpa" name="bclrcgpa" type="number"
                                                               placeholder="3.52"
                                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label>Scale <sup>(required)</sup></label>
                                                        <input wire:model.lazy="bscscale" id="bclrscale" name="bclrscale" type="number"
                                                               placeholder="4.00"
                                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                                                    
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <!-- <div class="w-full py-2">
                                            <label>Letter Grade <sup>(required)</sup></label>
                                                        <select wire:model.lazy="" id="bclrlettergrade" name="bclrlettergrade"
                                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                                                            <option value="">Select grade
                                                            </option>
                                                            <option value="A_PLUS"> A+</option>
                                                            <option value="A"> A</option>
                                                            <option value="A_MINUS"> A-</option>
                                                            <option value="B"> B</option>
                                                            <option value="C"> C</option>
                                                            <option value="D"> D</option>
                                                            <option value="F"> F</option>
                                                        </select>
                                                @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror
                                            </div> -->
                                          
                                            <div class="w-full py-2">
                                            <label>Passing Year <sup>(required)</sup></label>
                                                        <select wire:model.lazy="bscpasyear" id="bclrpassingyear" name="bclrpassingyear"
                                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                                                            <option value="">Select year
                                                            </option>
                                                            <option value="2021"> 2021</option>
                                                            <option value="2020"> 2020</option>
                                                            <option value="2019"> 2019</option>
                                                            <option value="2018"> 2018</option>
                                                            <option value="2017"> 2017</option>
                                                            <option value="2016"> 2016</option>
                                                            <option value="2015"> 2015</option>
                                                            <option value="2014"> 2014</option>
                                                            <option value="2013"> 2013</option>
                                                            <option value="2012"> 2012</option>
                                                            <option value="2011"> 2011</option>
                                                            <option value="2010"> 2010</option>
                                                            <option value="2009"> 2009</option>
                                                            <option value="2008"> 2008</option>
                                                            <option value="2007"> 2007</option>
                                                            <option value="2006"> 2006</option>
                                                            <option value="2005"> 2005</option>
                                                            <option value="2004"> 2004</option>
                                                            <option value="2003"> 2003</option>
                                                            <option value="2002"> 2002</option>
                                                            <option value="2001"> 2001</option>
                                                            <option value="2000"> 2000</option>
                                                        </select>
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            <div class="w-full py-2">
                                            <label style="font-size: 12px;">Duration(Yrs)
                                                            <sup>(required)</sup></label>
                                                        <input wire:model.lazy="bscduration" id="bclrduration" name="bclrduration" type="number"
                                                               placeholder="4"
                                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" >
                                                    
                                                <!-- @error('confirmPassword') <span class="text-xs text-red-500 mt-1">{{ $message }}</span> @enderror -->
                                            </div>
                                            
                                        </div>
                                    @endif
                                        
                                   
                                </div>
                                <div class="flex items-center justify-between px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    @if ($currentPage === 1)
                                        <div></div>
                                    @else
                                        <button wire:click="goToPreviousPage" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-400 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                                            Back
                                        </button>
                                    @endif
                                    @if ($currentPage === count($pages))
                                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Submit
                                        </button>
                                    @else
                                        <button wire:click="goToNextPage" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Next
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
