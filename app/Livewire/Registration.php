<?php

namespace App\Livewire;

use App\Models\Registration as RegistrationModel;
use App\Models\SchoolUnit;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Pendaftaran PPDB - Sekolah Nusantara')]
class Registration extends Component
{
    public int $step = 1;

    // Personal Data
    public string $full_name = '';
    public string $gender = '';
    public string $place_of_birth = '';
    public string $date_of_birth = '';
    public string $nik = '';
    public string $address = '';

    // Contact
    public string $phone = '';
    public string $email = '';

    // Parents
    public string $father_name = '';
    public string $father_job = '';
    public string $father_phone = '';
    public string $mother_name = '';
    public string $mother_job = '';
    public string $mother_phone = '';

    // Academic
    public string $previous_school = '';
    public string $previous_school_address = '';
    public string $graduation_year = '';
    public string $average_grade = '';
    public ?int $school_unit_id = null;

    public bool $submitted = false;
    public ?string $registrationNumber = null;

    protected function rules()
    {
        return [
            'full_name' => 'required|string|max:255',
            'gender' => 'required|in:L,P',
            'place_of_birth' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'nik' => 'nullable|string|size:16',
            'address' => 'required|string',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'father_name' => 'required|string|max:255',
            'father_job' => 'nullable|string|max:255',
            'father_phone' => 'nullable|string|max:20',
            'mother_name' => 'required|string|max:255',
            'mother_job' => 'nullable|string|max:255',
            'mother_phone' => 'nullable|string|max:20',
            'previous_school' => 'required|string|max:255',
            'previous_school_address' => 'nullable|string',
            'graduation_year' => 'nullable|string|max:4',
            'average_grade' => 'nullable|numeric|min:0|max:100',
            'school_unit_id' => 'required|exists:school_units,id',
        ];
    }

    public function nextStep()
    {
        if ($this->step === 1) {
            $this->validate([
                'full_name' => 'required|string|max:255',
                'gender' => 'required|in:L,P',
                'place_of_birth' => 'required|string|max:255',
                'date_of_birth' => 'required|date',
                'nik' => 'nullable|string|size:16',
                'address' => 'required|string',
                'phone' => 'required|string|max:20',
                'email' => 'required|email',
            ]);
        } elseif ($this->step === 2) {
            $this->validate([
                'father_name' => 'required|string|max:255',
                'mother_name' => 'required|string|max:255',
            ]);
        }

        $this->step++;
    }

    public function prevStep()
    {
        $this->step--;
    }

    public function submit()
    {
        $this->validate();

        $registration = RegistrationModel::create([
            'registration_number' => 'REG-' . now()->format('Ymd') . '-' . str_pad(RegistrationModel::count() + 1, 4, '0', STR_PAD_LEFT),
            'full_name' => $this->full_name,
            'gender' => $this->gender,
            'place_of_birth' => $this->place_of_birth,
            'date_of_birth' => $this->date_of_birth,
            'nik' => $this->nik,
            'address' => $this->address,
            'phone' => $this->phone,
            'email' => $this->email,
            'father_name' => $this->father_name,
            'father_job' => $this->father_job,
            'father_phone' => $this->father_phone,
            'mother_name' => $this->mother_name,
            'mother_job' => $this->mother_job,
            'mother_phone' => $this->mother_phone,
            'previous_school' => $this->previous_school,
            'previous_school_address' => $this->previous_school_address,
            'graduation_year' => $this->graduation_year,
            'average_grade' => $this->average_grade ?: null,
            'school_unit_id' => $this->school_unit_id,
            'status' => 'pending',
        ]);

        $this->registrationNumber = $registration->registration_number;
        $this->submitted = true;
    }

    public function render()
    {
        return view('livewire.registration', [
            'schoolUnits' => SchoolUnit::all(),
        ]);
    }
}
