<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Kreait\Firebase\Contract\Database;

class firebaseiot extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = "DHT";

    }


    public function fetchdht()
    {
        $DHT11 = $this->database->getReference($this->tablename)->getValue();
        return response()->json([
            'DHT11'=> $DHT11,
        ]);

    }

    public function fetchMoistureSensor()
    {
        $moisturesensor = $this->database->getReference("MoistureSensor")->getValue();
        return response()->json([
            'moisturesensor'=> $moisturesensor,
        ]);

    }

    public function fetchrdsensor()
    {
        $rdsensor = $this->database->getReference("Raindrop")->getValue();
        return response()->json([
            'rdsensor'=> $rdsensor,
        ]);

    }

    public function fetchbulbs()
    {
        $bulbs = $this->database->getReference("Bulbs")->getValue();
        return response()->json([
            'bulbs'=> $bulbs,
        ]);

    }

    public function storebulbOn(Request $request)
    {
        // $postData = [
        //     // 'light1' => $request->bulbstate,
        //     'light1' => 'hhh',
        // ];

        // $savebulb = $this->database->getReference("Bulbs")->push($postData); // this is for store

        $Onbulb = $this->database->getReference("Bulbs/room1")->update(array('light1' => 1));  //Update the value


    }
    
    public function storebulbOff(Request $request)
    {
        $Offbulb = $this->database->getReference("Bulbs/room1")->update(array('light1' => 0));  //Update the value
    }

    public function storepumpOn(Request $request)
    {
        $Onpump = $this->database->getReference("Pumps/area")->update(array('pump1' => 1));  //Update the value
    }
    
    public function storepumpOff(Request $request)
    {
        $Offpump = $this->database->getReference("Pumps/area")->update(array('pump1' => 0));  //Update the value
    }








    public function fetchpumps()
    {
        $pumps = $this->database->getReference("Pumps")->getValue();
        return response()->json([
            'pumps'=> $pumps,
        ]);

    }




}
