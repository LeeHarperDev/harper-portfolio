<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    /****************************************************************************************************
     * 
     * Function: SkillController.store().
     * Purpose: Stores a new skill into the database based on information provided by the user.
     * Precondition: N/A.
     * Postcondition: N/A.
     * 
     * @param Request $request The entire HTTP request.
     * @returns json The JSON object that details the newly-stored skill.
     * 
    ****************************************************************************************************/
    public function store(Request $request) {
        $skill = Skill::create([
            'name' => $request->skill_name,
            'img_src' => 'images/uploaded/' . $request->image->hashName(),
            'img_alt' => $request->img_alt
        ]);

        $request->image->store('/images/uploaded');

        return json_encode($skill);
    }

    /****************************************************************************************************
     * 
     * Function: SkillController.viewJson().
     * Purpose: Retrieves a collection of all skills within the database, then returns it to the user as
     *          a JSON array.
     * Precondition: N/A.
     * Postcondition: N/A.
     * 
     * @returns json The JSON object that contains information on all skills within the database.
     * 
    ****************************************************************************************************/
    public function viewJson() {
        $skills = Skill::all();

        return json_encode($skills);
    }
}