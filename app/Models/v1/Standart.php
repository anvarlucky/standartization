<?php

namespace App\Models\v1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Standart extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    const STORAGE_URL_SCOPE = '/public/scope';
    const STORAGE_URL_NORMATIVE = 'public/standart/photo_normative_references';
    const STORAGE_URL_CLASSIFICATONS = 'public/standart/photo_classifications';
    const STORAGE_URL_TECHNICAL = 'public/standart/photo_technical_requirement';
    const STORAGE_URL_SAFETY = 'public/standart/photo_safety_requirement';
    const STORAGE_URL_RULES = 'public/standart/photo_acceptance_rules';
    const STORAGE_URL_CONTROL = 'public/standart/photo_control_method';
    const STORAGE_URL_APPENDIX = 'public/standart/photo_appendix_a_reference';
    const STORAGE_URL_BIBLIOGRAPHY = 'public/standart/photo_bibliography';
    const STORAGE_URL_BIBLIOGRAPHY_DATA = 'public/standart/photo_bibliography_data';
    const STORAGE_URL_DOC = '/public/docstandart';
    const STORAGE_URL_PDF = '/public/pdfstandart';

    public static function uploadPhotoScope($uploadFile){
        $filename = time().$uploadFile->getClientOriginalName();
        Storage::disk('local')->putFileAs(
            self::STORAGE_URL_SCOPE,
            $uploadFile,
            $filename
        );
        return $filename;
    }

    public static function uploadPhotoNormative($uploadFile){
        $filename = time().$uploadFile->getClientOriginalName();
        Storage::disk('local')->putFileAs(
            self::STORAGE_URL_NORMATIVE,
            $uploadFile,
            $filename
        );
        return $filename;
    }

    public static function uploadPhotoClassifications($uploadFile){
        $filename = time().$uploadFile->getClientOriginalName();
        Storage::disk('local')->putFileAs(
            self::STORAGE_URL_CLASSIFICATONS,
            $uploadFile,
            $filename
        );
        return $filename;
    }

    public static function uploadPhotoTechnical($uploadFile){
        $filename = time().$uploadFile->getClientOriginalName();
        Storage::disk('local')->putFileAs(
            self::STORAGE_URL_TECHNICAL,
            $uploadFile,
            $filename
        );
        return $filename;
    }

    public static function uploadPhotoSafety($uploadFile){
        $filename = time().$uploadFile->getClientOriginalName();
        Storage::disk('local')->putFileAs(
            self::STORAGE_URL_SAFETY,
            $uploadFile,
            $filename
        );
        return $filename;
    }

    public static function uploadPhotoRules($uploadFile){
        $filename = time().$uploadFile->getClientOriginalName();
        Storage::disk('local')->putFileAs(
            self::STORAGE_URL_RULES,
            $uploadFile,
            $filename
        );
        return $filename;
    }

    public static function uploadPhotoControl($uploadFile){
        $filename = time().$uploadFile->getClientOriginalName();
        Storage::disk('local')->putFileAs(
            self::STORAGE_URL_CONTROL,
            $uploadFile,
            $filename
        );
        return $filename;
    }

    public static function uploadPhotoAppendix($uploadFile){
        $filename = time().$uploadFile->getClientOriginalName();
        Storage::disk('local')->putFileAs(
            self::STORAGE_URL_APPENDIX,
            $uploadFile,
            $filename
        );
        return $filename;
    }

    public static function uploadPhotoBibliography($uploadFile){
        $filename = time().$uploadFile->getClientOriginalName();
        Storage::disk('local')->putFileAs(
            self::STORAGE_URL_BIBLIOGRAPHY,
            $uploadFile,
            $filename
        );
        return $filename;
    }

    public static function uploadPhotoBibliographyData($uploadFile){
        $filename = time().$uploadFile->getClientOriginalName();
        Storage::disk('local')->putFileAs(
            self::STORAGE_URL_BIBLIOGRAPHY_DATA,
            $uploadFile,
            $filename
        );
        return $filename;
    }
    public static function uploadDoc($uploadFile){
        $filename = time().$uploadFile->getClientOriginalName();
        Storage::disk('local')->putFileAs(
            self::STORAGE_URL_DOC,
            $uploadFile,
            $filename
        );
        return $filename;
    }
    public static function uploadPdf($uploadFile){
        $filename = time().$uploadFile->getClientOriginalName();
        Storage::disk('local')->putFileAs(
            self::STORAGE_URL_PDF,
            $uploadFile,
            $filename
        );
        return $filename;
    }

    public function doc_type(){
        return $this->belongsTo('App\Models\v1\DocType');
    }

}
