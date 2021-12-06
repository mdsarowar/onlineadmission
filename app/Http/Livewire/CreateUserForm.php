<?php

namespace App\Http\Livewire;

use App\Models\studentaddress;
use App\Models\studentbsc;
use App\Models\studentdiploma;
use App\Models\studenthsc;
use App\Models\studentssc;
use Livewire\Component;
use phpDocumentor\Reflection\Types\This;

class CreateUserForm extends Component
{
    public $currentPage = 1;
    public $success;

    // Form properties first page
    public $departmentname;
    public $depprogram;
    // Form properties second page
    public $firstname;
  
    public $lastname;
    public $stphone;
    public $stemail;
    public $stgender;
    public $semester;
    // Form properties 3 page
    public $ssctype;
    public $sscgroup;
    public $sscschoolname;
    public $sscboard;
    public $sscgrade;
    public $sscgpa;
    public $sscgradesub4;
    public $sscgradescale;
    public $sscrollnumber;
    public $sscregnumber;
    public $sscpasyear;
    public $sscduration;

    public $hscexmtype;
    public $hscgroup;
    public $hcsschoolname;
    public $hscboard;
    public $hscgrade;
    public $hscgpa;
    public $hscgpa4;
    public $hscgradescale;
    public $hscrollnumber;
    public $hscregnumber;
    public $hscpasyear;
    public $hscduration;

    public $diploma;
    public $diplodegree;
    public $diplogroup;
    public $diploschoolname;
    public $diplocgpa;
    public $diplogradescale;
    public $diploletergrade;
    public $diplorollnumber;
    public $diplopasyear;
    public $diploduration;

    public $bsctype;
    public $bscgroup;
    public $bscschool;
    public $bsccgpa;
    public $bscscale;
    public $bscletergrade;
    public $bscrollnumber;
    public $bscpasyear;
    public $bscduration;

    public $mstrtype;
    public $mstrgroup;
    public $mstrschoolname;
    public $mstrcgpa;
    public $mstrletergrade;
    public $mstrrollnumber;
    public $mstrpasyear;
    public $mstrduration;
    
    public $firstName;
    public $lastName;
    public $email;
    public $password;
    public $confirmPassword;

    public $pages = [
        1 => [
            'heading' => 'Personal Information',
            'subheading' => 'Enter your name and email to get started.',
        ],
        2 => [
            'heading' => 'Password',
            'subheading' => 'Create a password for the new account.',
        ],
        3 => [
            'heading' => 'Password',
            'subheading' => 'Create a password for the new account.',
        ],
    ];

    private $validationRules = [
        1 => [
            'departmentname' => ['required'],
            'depprogram' => ['required'],
            'semester' => ['required'],

           
        ],
    
        2 =>[
            'firstname' => ['required', 'min:3'],
            'lastname' => ['required', 'min:3'],
        
            'stphone' => ['required'],
            'stemail' => ['required', 'email', 'unique:users,email'],
            
            'stgender' => ['required'],
           
        ],

        3=>[
            
            'ssctype' => ['required'],
            'sscgroup' => ['required'],
            'hcsschoolname' => ['required'],
            'sscboard' => ['required'],
           
            'sscgrade' => ['required'],
            'sscgpa' => ['required'],
            'sscgradesub4' => ['required'],
            
            'sscrollnumber' => ['required'],
            'sscregnumber' => ['required'],
            'sscpasyear' => ['required',],
            'sscduration' => ['required'],

            'hscexmtype' => ['required'],
            'hscgroup' =>  ['required'],
            'hcsschoolname' =>  ['required'],
            'hscboard' =>  ['required'],
            'hscgrade' =>  ['required'],
            'hscgpa' =>  ['required'],
            'hscgpa4' =>  ['required'],
            
            'hscrollnumber' =>  ['required'],
            'hscregnumber' =>  ['required'],
            'hscpasyear' =>  ['required'],
            'hscduration' =>  ['required'],

            'diploma' =>  ['required'],
            
            'diplogroup' =>  ['required'],
            
            'diploschoolname' =>  ['required'],
            'diplogradescale' =>  ['required'],
            'diplocgpa' =>  ['required'],
           
            'diploletergrade' =>  ['required'],
           
            'diplopasyear' =>  ['required'],
            'diploduration' =>  ['required'],

            'bsctype' =>  ['required'],
           
            'bscgroup' =>  ['required'],
            'bscschool' =>  ['required'],
            'bsccgpa' =>  ['required'],
            'bscscale' =>  ['required'],
            'bscletergrade' =>  ['required'],
            
            
            'bscpasyear' =>  ['required'],
            'bscduration' =>  ['required'],

        ],

     
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage]);
    }

    public function goToNextPage()
    {
        $this->validate($this->validationRules[$this->currentPage]);
        $this->currentPage++;
    }

    public function goToPreviousPage()
    {
        $this->currentPage--;
    }

    public function resetSuccess()
    {
        $this->reset('success');
    }

    public function submit()
    {
        // $rules = collect($this->validationRules)->collapse()->toArray();

        // $this->validate($rules);

        studentaddress::create([
            'name' => "{$this->firstName} {$this->lastname}",
            'email' => $this->stemail,
            'phpne' => $this->stphone ,
            'Department_name' => $this->departmentname,
            'Program' => $this->depprogram,
            'Semester' => $this->semester,
            'Student_gender' => $this->stgender,
           
        ]);
        studentssc::create([
            'Ssc_type' => $this->ssctype,
            'Ssc_group' => $this->sscgroup,
            'School_name' => $this->sscschoolname,
            'Ssc_board' => $this->sscboard,
            'Ssc_grade' => $this->sscgrade,
            'Ssc_gpa' => $this->sscgpa,
            'Ssc_4sub' => $this->sscgradesub4,
            'Ssc_roll' => $this->sscrollnumber,
            'Ssc_registration_number' => $this->sscregnumber,
            'Ssc_passing_year' => $this->sscpasyear,
            'Ssc_duration' => $this->sscduration,
            'email' => $this->stemail,
           
        ]);
        studentdiploma::create([
            'Diploma_type' => $this->diploma,
            'Diploma_group' => $this->diplogroup,
            'Diploma_School name' => $this->diploschoolname,
            'Diploma_scale' => $this->diplogradescale,
            'Diploma_cgpa' => $this->diplocgpa,
            'Diploma_grade' => $this->diploletergrade,
            'Diploma_passing year' => $this->diplopasyear,
            'Diploma_duration' => $this->diploduration,
            'email ' => $this->stemail,
            
        ]);
       
        studenthsc::create([
            'HSC_type' => $this->hscexmtype,
            'HSC_group' => $this->hscgroup,
            'HSC_School name' => $this->hcsschoolname,
            'HSC_board' => $this->hscboard,
            'HSC_grade' => $this->hscgrade,
            'HSC_gpa' => $this->hscgpa,
            'HSC_4sub' => $this->hscgpa4,
            'HSC_roll' => $this->hscrollnumber,
            'HSC_registration number'=> $this->hscregnumber,
            'HSC_passing year' => $this->hscpasyear,
            'HSC_duration' => $this->hscduration,
            'email' => $this->stemail,
            
        ]);
        studentbsc::create([
            'BSc_type' => $this->bsctype,
            'BSc_group' => $this->bscgroup,
            'BSc_School name' => $this->bscschool,
            'BSc_scale' => $this->bscscale,
            'BSc_cgpa' => $this->bsccgpa,
            'BSc_grade' => $this->bscletergrade,
            'BSc_passing year' => $this->bscpasyear,
            'BSc_duration' => $this->bscduration,
            'email' => $this->stemail,
            
        ]);

        $this->reset();
        $this->resetValidation();

        $this->success = 'User created successfully!';
    }

    public function render()
    {
        return view('livewire.create-user-form');
    }
}
