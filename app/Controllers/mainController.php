<?php

namespace App\Controllers;

class mainController extends BaseController {
    public function index() {
        return view('website/index');
    }

    public function test() {
        // $userModel = new \App\Models\insects(); 
        // $data['insects'] = $userModel->findAll();

        return view('website/test');
    }

    public function signup() {
        helper(['form']);

        

        return view('/signup');
    }

    public function signin() {
        helper(['form']);
        $data = array();

        if ($this->request->getMethod() == 'post') {
            $post = $this->request->getPost(['username', 'password']);

        $rules = [
                'username'=> ['label' => 'username', 'rules' => 'required'], 
                'password'=> ['label' => 'password', 'rules' => 'required']
            ];

        if(! $this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $userModel = new \App\Models\user();
                $user = $userModel ->where('username', $post['username'])->where('password', sha1($post['password']))->first();

                if (! $user) {
                    $session = session();
                    $session->setflashdata('invalid', 'Invalid Username or Password. Please try again!');
                } else {
                    $this->setUserSession($user);

                    return redirect()->to('/dashboard');
                }
                
            }
        }
        return view('/signin', $data);
    }

    public function setUserSession($user) {

        $myFullName = '';

        if (empty($user->middle_name)) {
            $myFullName = $user->first_name . ' ' . $user->last_name;
        } else {
            $myFullName = $user->first_name . ' ' . $user->middle_name[0] . '. ' . $user->last_name;
        }
        
        
        $data = [
            'myUserId' => $user->user_id,
            'myFirstName' => $user->first_name,
            'myMiddleName' => $user->middle_name,
            'myLastName' => $user->last_name,
            'myUsername' => $user->username,
            'myPassword' => $user->password,
            'myFullName' => $myFullName,
            'isLoggedIn' => true
        ];

        session()->set($data);
    }

    public function confirm_signout() {
        
        return view('signout');
    }

    public function signout() {
            session()->destroy();
            return redirect()->to('/');
    }
    
    // public function dashboard() {
    //     $userModel = new \App\Models\insects(); 
    //     $data['insects'] = $userModel->findAll();

    //     return view('website/dashboard', $data);
    // }

    public function dashboard() {
        $insectModel = new \App\Models\Insects();
    
        // Fetch insects and apply sorting
        $insects = $insectModel->getInsectData()
                            ->orderBy('insect_name', 'ASC')
                            ->get()->getResult();
    
        $data['insects'] = $insects;
    
        return view('website/dashboard', $data);
    }
    
    

    public function addData() {
        $data = array();
        helper(['form']);
        $userModel = new \App\Models\insects();

        $data['species'] = $userModel->getSpeciesData();
        $data['habitats'] = $userModel->getHabitatData();
        // Submit Button (post method)
        if ($this->request->getMethod() == 'post') {
            $post = $this->request->getPost(['insect_name', 'speciesID', 'habitatID']);
            // return dd($post);
            //Text Field Validation
            $rules = [
                'insect_name'=> ['label' => 'name of the insect', 'rules' => 'required'], 
                'speciesID'=> ['label' => 'species of the insect', 'rules' => 'required'],
                'habitatID'=> ['label' => 'habitat of the insect', 'rules' => 'required']
            ];

            if(! $this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $userModel = new \App\Models\insects();
                $userModel->save($post);

                $session = session();
                $session->setflashdata('success-add-data', 'Insect added to database!');

                return redirect()->to('/add/data');
            }

            
        }
        return view('website/add_data', $data);
    }

    // public function editData($id) {
    //     helper(['form']);

    //     // Select user from table
    //     $userModel = new \App\Models\insects(); 
    //     $data['insect'] = $userModel->find($id);
    //     $data['species'] = $userModel->getSpeciesData();
    //     $data['habitats'] = $userModel->getHabitatData();
        
    //     if($this->request->getMethod() == 'post') {
    //         $post = $this->request->getPost(['insect_name', 'speciesID', 'habitatID']);

    //         //Text Field Validation
    //         $rules = [
    //             'insect_name'=> ['label' => 'name of the insect', 'rules' => 'required'], 
    //             'speciesID'=> ['label' => 'species of the insect', 'rules' => 'required'],
    //             'habitatID'=> ['label' => 'habitat of the insect', 'rules' => 'required']
    //         ];

    //         if(! $this->validate($rules)) {
    //             $data['validation'] = $this->validator;
    //         } else {
    //             $userModel->update($id, $post);

    //             $session = session();
    //             $session->setflashdata('success-update-insect', 'Insect data successfully updated!');

    //             return redirect()->to('/dashboard');
    //         }
    //     }

    //     return view('website/edit_data', $data);
    // }

    public function editData($id) {
        helper(['form']);

        // Select user from table
        $insectModel = new \App\Models\insects();
        $data = [
            'insect' => $insectModel->find($id),
            'species' => $insectModel->getSpeciesData(),
            'habitats' => $insectModel->getHabitatData(),
        ];
        
        if($this->request->getMethod() == 'post') {
            $post = $this->request->getPost(['insect_name', 'speciesID', 'habitatID']);

            //Text Field Validation
            $rules = [
                'insect_name'=> ['label' => 'name of the insect', 'rules' => 'required'], 
                'speciesID'=> ['label' => 'species of the insect', 'rules' => 'required'],
                'habitatID'=> ['label' => 'habitat of the insect', 'rules' => 'required']
            ];

            if(! $this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $insectModel->update($id, $post);

                $session = session();
                $session->setflashdata('success-update-insect', 'Insect data successfully updated!');

                return redirect()->to('/dashboard');
            }
        }

        return view('website/edit_data', $data);
    }

    public function viewData($id){
        helper(['form']);
        $userModel = new \App\Models\Insects();
        $data['insect'] = $userModel->getInsectDataById($id);
        // View selected insect
        return view('website/view_data', $data);
    }

    public function deleteData($id){
        helper(['form']);
        //Select one user from table
        $insectModel = new \App\Models\insects();
        $data = [
            'insect' => $insectModel->find($id),
            'species' => $insectModel->getSpeciesData(),
            'habitats' => $insectModel->getHabitatData(),
        ];

        // Delete user
        if ($this->request->getMethod() == 'post') {    
            $insectModel->delete($id);

            $session = session();
            $session->setflashdata('success-delete-insect', 'Insect Data Successfully Deleted!');
            
            return redirect()->to('/dashboard');
        }
        
        // Return delete page with user data
        return view('website/delete_data', $data);
    }

    public function addUser() {
        $data = array();
        helper(['form']);
        // Submit Button (post method)
        if ($this->request->getMethod() == 'post') {
            $post = $this->request->getPost(['first_name', 'middle_name', 'last_name', 'username', 'password']);
            // return dd($post);
            //Text Field Validation
            $rules = [
                'first_name'=> ['label' => 'first name', 'rules' => 'required'], 
                'last_name'=> ['label' => 'last name', 'rules' => 'required'],
                'username'=> ['label' => 'username', 'rules' => 'required|is_unique[user.username]'], 
                'password'=> ['label' => 'password', 'rules' => 'required'],
                'confirm_password'=> ['label' => 'confirmation', 'rules' => 'required_with[password]|matches[password]']
            ];

            if(! $this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $post['password'] = sha1($post['password']);
                
                $userModel = new \App\Models\user();
                $userModel->save($post);

                $session = session();
                $session->setflashdata('success-add-user', 'User Created Successfully!');

                return redirect()->to('/signup');
            }

            
        }
        return view('signup', $data);
    }

    public function viewProfile() {
        // Check if the user is logged in
        if (session()->get('isLoggedIn')) {
            // Load the user model
            $userModel = new \App\Models\user(); // Assuming you have a UserModel

            // Fetch the user's profile data based on their ID
            $userId = session()->get('myUserId');
            $userData = $userModel->getUserDataById($userId);

            // Pass the user data to the view
            $data['userData'] = $userData;

            // Load the view with the user data
            return view('website/view_profile', $data);
        }
    }

    public function editProfile()
    {
        $userId = session()->get('myUserId');
        $userModel = new \App\Models\user();
        $userData = $userModel->getUserDataById($userId);
        $data['userData'] = $userData;
        return view('website/edit_profile', $data);
    }

    public function updateProfile()
    {
        $userId = session()->get('myUserId');

        $userModel = new \App\Models\user();

        // Get user input data
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'middle_name' => $this->request->getPost('middle_name'),
            'last_name' => $this->request->getPost('last_name'),
        ];

        // Define validation rules
        $rules = [
            'first_name' => ['label' => 'First Name', 'rules' => 'required'],
            'last_name' => ['label' => 'Last Name', 'rules' => 'required'],
        ];

        // Perform validation
        if (!$this->validate($rules)) {
            // Validation failed, return the view with validation errors
            return view('website/edit_profile', [
                'userData' => (object) $data, // Pass user data back to the view
                'validation' => $this->validator // Pass validation object to the view
            ]);
        } else {
            // Validation passed, handle profile picture upload
            $profilePicture = $this->request->getFile('profile_picture');

            // Check if a new profile picture is uploaded
            if ($profilePicture->isValid() && !$profilePicture->hasMoved()) {
                // Generate a new filename to avoid conflicts
                $newName = $profilePicture->getRandomName();

                // Move the uploaded file to the writable directory
                $profilePicture->move(ROOTPATH . 'public/uploads/profile_pictures', $newName);

                // Update the user profile with the new profile picture filename
                $data['profile_picture'] = $newName;
            }

            // Update the user profile information
            $userModel->updateUserProfile($userId, $data);

            // Construct the full name based on the provided data
            $fullName = $data['first_name'] . ' ';
            
            // Check if the middle name is provided
            if (!empty($data['middle_name'])) {
                // Take the first letter of the middle name
                $fullName .= substr($data['middle_name'], 0, 1) . '. ';
            }

            // Append the last name
            $fullName .= $data['last_name'];

            // Update session data with the new full name
            session()->set('myFullName', $fullName);

            // Set success flashdata
            $session = session();
            $session->setFlashdata('success-update-profile', 'Profile successfully updated!');

            // Redirect to the edit profile page
            return redirect()->to('edit/profile');
        }
    }





}