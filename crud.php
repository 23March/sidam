<?php
    class crud{
        private $db;

        function __construct($koneksi){
            $this->db = $koneksi;
        }

        public function insertMahasiswas($fname, $lname, $dob, $gender, $email, $contact, $agama){
                try{
                    $sql= "INSERT INTO mahasiswa(firstname, lastname, gender, dob, email, phone, agama_id) VALUES (:fname, :lname,:dob, :email, :contact, :agama )";
                    $stmt = $this->db->prepare($sql);

                    $stmt->bindparam(':fname', $fname);
                    $stmt->bindparam(':lname', $lname);
                    $stmt->bindparam(':gender', $gender);
                    $stmt->bindparam(':dob', $dob);
                    $stmt->bindparam(':email', $email);
                    $stmt->bindparam(':phone', $contact);
                    $stmt->bindparam(':agama', $agama);

                    $stmt->execute();
                    return true;

                }catch(PDOException $e){
                    echo $e->getMessage();
                    return false;
                }
        }

        public function editMahasiswa($id,$fname, $lname, $dob, $gender, $email, $contact, $agama){
            try{
            $sql = "UPDATE `attendee` SET `firstname`=:fname,`lastname`= :lname,`dob`=:dob, 'gender'=:gender, `email`=:email,`phone`=:contact,`agama_id`=:agama WHERE mahasiswa_id=:id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->bindparam(':fname', $fname);
            $stmt->bindparam(':lname', $lname);
            $stmt->bindparam(':gender', $gender);
            $stmt->bindparam(':dob', $dob);
            $stmt->bindparam(':email', $email);
            $stmt->bindparam(':phone', $contact);
            $stmt->bindparam(':agama', $agama);
            $stmt->execute();
            return true;
            }
            catch(PDOException $e){
                echo $e->getMessage();
                return false;

            }
            
            
        }

        public function getMahasiswa(){
            try{
                $sql = "SELECT * FROM mahasiswa a inner join agama s on a.agama_id = s.agama_id";
                $result = $this->db->query($sql);
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;

            }
        }
        public function deleteMahasiswa($id){
            try{
                $sql = "delete from mahasiswa where mahasiswa_id=:id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
            

        }

        public function getMahasiswadetails($id){
            try{
                $sql = "SELECT *FROM mahasiswa  a inner join agama s on a.agama_id = s.agama_id where mahasiswa_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                $result=$stmt->fetch();
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        public function getAgama(){
            $sql = "SELECT *FROM agama";
            $result = $this->db->query($sql);
            return $result;
        }
    }
?>