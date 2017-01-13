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

    public function callCalendarsPoster(){
    	return view('services.calendars-poster');
    }
    public function callCalendarsMonthly(){
        return view('services.calendars-monthly');
    }
    public function callCalendarsTable(){
        return view('services.calendars-table');
    }
    // --->
    public function callStickersRound(){
        return view('services.stickers-round');
    }
    public function callStickersSquare(){
        return view('services.stickers-square');
    }
     public function callStickersRectangle(){
        return view('services.stickers-rectangle');
    }
    // --->
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
    // --->
    public function callBusinesscards1Side(){
        return view('services.businesscards-1side');
    }
    public function callBusinesscards2Side(){
        return view('services.businesscards-2side');
    }
    // --->
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
    // --->
    public function callTickets1Side(){
        return view('services.tickets-1side');
    }
    public function callTickets2Side(){
        return view('services.tickets-2side');
    }
    // --->
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
    // --->
    public function callReceiptsCarbon(){
        return view('services.receipts-carbon');
    }
    public function callReceiptsCarbonless(){
        return view('services.receipts-carbonless');
    }
    // --->
    public function callNotebooksWireSoft(){
        return view('services.notebooks-wiresoft');
    }
    public function callNotebooksWireHard(){
        return view('services.notebooks-wirehard');
    }
    public function callNotebooksPerfectSoft(){
        return view('services.notebooks-perfectsoft');
    }
    public function callNotebooksPerfectHard(){
        return view('services.notebooks-perfecthard');
    }
    // --->
    public function callFlyers1Side(){
        return view('services.flyers-1side');
    }
    public function callFlyers2Side(){
        return view('services.flyers-2side');
    }
    public function callBrochuresBifold(){
        return view('services.brochures-bifold');
    }
    public function callBrochuresTrifold(){
        return view('services.brochures-trifold');
    }
    public function callBrochuresQuadfold(){
        return view('services.brochures-quadfold');
    }

}
