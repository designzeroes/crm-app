<?php
namespace App\Http\Controllers;
use OpenAI;
use Smalot\PdfParser\Parser;
use Illuminate\Http\Request;
class CvController extends Controller
{
    public function chatgpt()
    {

            // Specify the full path to your PDF file
    $pdfFilePath = 'C:/Users/Hi-Tech/Downloads/cv-template.pdf';


    // Parse PDF file and build necessary objects.
    $parser = new Parser();
    $pdf = $parser->parseFile($pdfFilePath);
    
    $text = $pdf->getText();
        
        $apiKey = getenv('OPENAI_API_KEY');
        $client = OpenAI::client($apiKey);
        $result = $client->chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'Given a CV extrected data, your task is label information. 
                                  All data in json format.
                    
                    {
                        "name": "John Doe",
                        "email": "john.doe@example.com",
                        "phone": "+1234567890",
                        "address": "Sample address",
                        "education": [
                            {
                                "institute": "Sample institute",
                                "location": "Sample institute location",
                                "degree": "Sample Degree title",
                                "duration": "2010-2014"
                            }
                             // Add more education entries as needed
                        ],
                        "work_experience": [
                            {
                                "company": "Sample Company",
                                "location": "City A, Country X",
                                "position": "Software Engineer",
                                "duration": "Jan-2015 – Dec-2017",
                                "description": "Worked on various software projects."
                            }
                            // Add more work history entries as needed
                        ],
                            "interests": "Technology, Photography, Travel",
                            "achievements": "Received the Innovation Awards.",
                            "nationality": "Citizen of Country Z",
                            "languages": "English, Spanish"
                    }',
                ],
                [  'role' => 'user', 'content' => $text],
            ],
        ]);

      //   echo $result->choices[0]->message->content;
      $dataToStore = json_decode($result->choices[0]->message->content, true);



// Echoing basic information
echo !empty($dataToStore['name']) ? "<br>Name: " .$dataToStore['name'] : '';
echo !empty($dataToStore['email']) ? "<br>Email: " .$dataToStore['email'] : '';
echo !empty($dataToStore['phone']) ? "<br>Phone: " .$dataToStore['phone'] : '';
echo !empty($dataToStore['address']) ? "<br>Address: " .$dataToStore['address'] : '';

// Echoing work experience
if (isset($dataToStore['work_experience'])) {
    foreach ($dataToStore['work_experience'] as $company) {
        // Print or use data for each company
        echo (!empty($company['company']) ? "<br><br>Company: " . $company['company'] : '');
        echo  (!empty($company['location']) ? "<br>Location: " .$company['location'] : '');
        echo  (!empty($company['position']) ? "<br>Position: " .$company['position'] : '');
        echo  (!empty($company['duration']) ? "<br>Duration: " .$company['duration'] : '');
        echo  (!empty($company['description']) ? "<br>Description: " .$company['description'] : '');
    }
}

// Echoing education
if (isset($dataToStore['education'])) {
    foreach ($dataToStore['education'] as $degree) {
        // Print or use data for each degree
        echo (!empty($degree['institute']) ? "<br><br>Institute: " . $degree['institute'] : '');
        echo  (!empty($degree['location']) ? "<br>Location: " .$degree['location'] : '');
        echo  (!empty($degree['degree']) ? "<br>Degree: " .$degree['degree'] : '');
        echo  (!empty($degree['duration']) ? "<br>Duration: " .$degree['duration'] : '');
        echo  (!empty($degree['description']) ? "<br>Description: " .$degree['description'] : '');
    }
}

echo !empty($dataToStore['interests']) ? "<br><br>interests: " .$dataToStore['interests'] : '';
echo !empty($dataToStore['achievements']) ? "<br>achievements: " .$dataToStore['achievements'] : '';
echo !empty($dataToStore['nationality']) ? "<br>nationality: " .$dataToStore['nationality'] : '';
echo !empty($dataToStore['languages']) ? "<br>languages: " .$dataToStore['languages'] : '';



    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
