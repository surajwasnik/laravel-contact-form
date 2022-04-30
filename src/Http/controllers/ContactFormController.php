<?php
    namespace SunSid\Contactform\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use SunSid\Contactform\Models\ContactForm;

    class ContactFormController extends Controller {
        public function index(){
           return view('Contactform::contact');
        }
        public function sendMail(Request $request){
            ContactForm::create($request->all());
            return redirect(route('contact'))->with(['message' => 'Thank you, your query has been sent successfully. Team will get back to you in next 24-48 hrs.']);
        }
    }