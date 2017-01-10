<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;


class ServicesController extends Controller
{
    public function index(){
    	// return view('services-main');
    	return view('services.serv-land');
    }

    // callCalendars
    // callStickers
    // callInvitations
    // callNewsletters
    // callBooks
    // callYearbooks
    // callBusinesscards
    // callGiftwrappers
    // callSouvenirPrograms
    // callPaperBags
    // callBagtags
    // callCorporateFolders
    // callTickets
    // callPosters
    // callOfficeforms
    // callCertificates
    // callBoxes
    // callReceipts
    // callNotebooks
    // callFlyersbrochures


    public function callCalendars(){
    	return view('services.calendars');
    }
    public function callStickers(){
        return view('services.stickers');
    }
    public function callInvitations(){
        return view('services.invitations');
    }
    public function callNewsletters(){
        return view('services.newsletters');
    }
    public function callBooks(){
        return view('services.books');
    }
    public function callYearbooks(){
        return view('services.yearbooks');
    }
    public function callBusinesscards(){
        return view('services.businesscards');
    }
    public function callGiftwrappers(){
        return view('services.giftwrappers');
    }
    public function callSouvenirPrograms(){
        return view('services.souvenirprograms');
    }
    public function callPaperBags(){
        return view('services.paperbags');
    }

    public function callBagtags(){
        return view('services.bagtags');
    }
    public function callCorporateFolders(){
        return view('services.corporatefolders');
    }
    public function callTickets(){
        return view('services.tickets');
    }
    public function callPosters(){
        return view('services.posters');
    }
    public function callOfficeforms(){
        return view('services.officeforms');
    }
    public function callCertificates(){
        return view('services.certificates');
    }
    public function callBoxes(){
        return view('services.boxes');
    }
    public function callReceipts(){
        return view('services.receipts');
    }
    public function callNotebooks(){
        return view('services.notebooks');
    }
    public function callFlyersbrochures(){
        return view('services.flyersbrochures');
    }

}
