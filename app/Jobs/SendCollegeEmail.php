<?php

namespace App\Jobs;

use Mail;
use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\College;
use Log;

class SendCollegeEmail extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $coll;
    protected $baseurl;

    public function __construct($coll,$baseurl)
    {
        $this->coll = $coll;
        $this->baseurl = $baseurl;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $coll = $this->coll;

        $hash = sha1($coll->name."Pragyan Summit Rocks".$coll->email);
        $reglink = $this->baseurl."/rsvp?id=".$coll->id."&hash=".$hash;
        

        Mail::send('collegemail', ['name' => $coll->name,'reglink'=>$reglink], function ($m) use ($coll) {
            $m->from('noreply@pragyan.org', 'Team Pragyan');
            $m->to($coll->email, $coll->name)->subject('Pragyan Youth Business Summit');
        });

        $coll2 = College::where('id','=',$coll->id)->first();
        $coll2->sent = 1;
        $coll2->save();
        
        Log::info("Sent to ");
        Log::info($coll);
    }
}
