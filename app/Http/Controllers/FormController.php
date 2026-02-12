<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\Application;
use App\Models\Membership;
use App\Mail\FormSubmissionMail;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    /**
     * Handle enquiry form submission
     */
    public function submitEnquiry(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        $enquiry = Enquiry::create($data);

        // Send email notification
        $emailData = [
            'Name' => $enquiry->name,
            'Email' => $enquiry->email,
            'Phone' => $enquiry->phone,
            'Subject' => $enquiry->subject,
            'Message' => $enquiry->message,
            'Submitted At' => $enquiry->created_at->format('d M Y, h:i A'),
        ];

        try {
            Mail::to(config('mail.to.address'))->send(new FormSubmissionMail('Enquiry', $emailData));
        } catch (\Exception $e) {
            // Log error but don't fail the submission
            \Log::error('Mail sending failed: ' . $e->getMessage());
        }

        return back()->with('success', 'Your enquiry has been submitted successfully! We will get back to you soon.');
    }

    /**
     * Handle application form submission
     */
    public function submitApplication(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:10',
            'address' => 'nullable|string',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'dob' => 'nullable|date',
            'employer_info' => 'nullable|string|max:255',
            'course_name' => 'nullable|string|max:255',
            'referral_source' => 'nullable|string|max:255',
            'application_date' => 'nullable|date',
            'fee_amount' => 'nullable|numeric',
            'cheque_number' => 'nullable|string|max:50',
            'payment_date' => 'nullable|date',
            'bank_name' => 'nullable|string|max:255',
            'proof_attached' => 'nullable|string|max:10',
            'qualification_file' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'payment_proof_file' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'photo' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle file uploads
        if ($request->hasFile('qualification_file')) {
            $data['qualification_file'] = $request->file('qualification_file')->store('applications/qualifications', 'public');
        }
        if ($request->hasFile('payment_proof_file')) {
            $data['payment_proof_file'] = $request->file('payment_proof_file')->store('applications/payment-proofs', 'public');
        }
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('applications/photos', 'public');
        }

        $application = Application::create($data);

        // Send email notification
        $emailData = [
            'Name' => $application->first_name . ' ' . $application->last_name,
            'Email' => $application->email,
            'Phone' => $application->phone,
            'Gender' => $application->gender,
            'Date of Birth' => $application->dob ? $application->dob->format('d M Y') : null,
            'Address' => $application->address,
            'Course Name' => $application->course_name,
            'Employer Info' => $application->employer_info,
            'Referral Source' => $application->referral_source,
            'Fee Amount' => $application->fee_amount ? '₹' . $application->fee_amount : null,
            'Cheque Number' => $application->cheque_number,
            'Payment Date' => $application->payment_date ? $application->payment_date->format('d M Y') : null,
            'Bank Name' => $application->bank_name,
            'Proof Attached' => $application->proof_attached,
            'Photo' => $application->photo ? asset('storage/' . $application->photo) : 'Not Provided',
            'Submitted At' => $application->created_at->format('d M Y, h:i A'),
        ];

        try {
            Mail::to(config('mail.to.address'))->send(new FormSubmissionMail('Application', $emailData));
        } catch (\Exception $e) {
            \Log::error('Mail sending failed: ' . $e->getMessage());
        }

        return back()->with('success', 'Your application has been submitted successfully! We will review it shortly.');
    }

    /**
     * Handle membership form submission
     */
    public function submitMembership(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'gender' => 'nullable|string|max:10',
            'organization' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'office_address' => 'nullable|string',
            'office_phone' => 'nullable|string|max:20',
            'qualification' => 'nullable|string|max:255',
            'work_experience' => 'nullable|string|max:255',
            'work_designation' => 'nullable|string|max:255',
            'dob' => 'nullable|date',
            'aadhar' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'cheque_number' => 'nullable|string|max:50',
            'payment_date' => 'nullable|date',
            'amount' => 'nullable|numeric',
            'proof_attached' => 'nullable|boolean',
        ]);

        $data['proof_attached'] = $request->has('proof_attached') && $request->proof_attached == '1';

        $membership = Membership::create($data);

        // Send email notification
        $emailData = [
            'Name' => $membership->name,
            'Email' => $membership->email,
            'Phone' => $membership->phone,
            'Gender' => $membership->gender,
            'Address' => $membership->address,
            'Organization' => $membership->organization,
            'Designation' => $membership->designation,
            'Office Address' => $membership->office_address,
            'Office Phone' => $membership->office_phone,
            'Qualification' => $membership->qualification,
            'Work Experience' => $membership->work_experience,
            'Date of Birth' => $membership->dob ? $membership->dob->format('d M Y') : null,
            'Aadhar' => $membership->aadhar,
            'Cheque Number' => $membership->cheque_number,
            'Payment Date' => $membership->payment_date ? $membership->payment_date->format('d M Y') : null,
            'Amount' => $membership->amount ? '₹' . $membership->amount : null,
            'Proof Attached' => $membership->proof_attached ? 'Yes' : 'No',
            'Submitted At' => $membership->created_at->format('d M Y, h:i A'),
        ];

        try {
            Mail::to(config('mail.to.address'))->send(new FormSubmissionMail('Membership', $emailData));
        } catch (\Exception $e) {
            \Log::error('Mail sending failed: ' . $e->getMessage());
        }

        return back()->with('success', 'Your membership application has been submitted successfully!');
    }
}
