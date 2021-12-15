<?php 
namespace App\Models;
use CodeIgniter\Model;

class emp extends Model
{
    protected $table = 'emptbl';
    protected $primaryKey = 'id';
    protected $allowedFields = ['empNo','title','firstname','nickname','surname','gender','ethicsgroup','maritalstatus','disability','citizenship','idno','passport','sarstaxno','homecellno','hometellno','workcellno','worktellno','streetname','city','province','postalcode','country','pstreetname','pcity','pprovince','ppostalcode','pcountry','personalemail','workemail' ];

   
}