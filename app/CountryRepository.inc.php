<?php

include_once 'app/BaseRepository.inc.php';
include_once 'app/Country.inc.php';

class CountryRepository extends BaseRepository {

    protected static $table = 'country';

    public static function area_code_exists($connection, $area_code) {
        $area_code_exists = true;

        if (isset($connection)) {
            try {
                $sql = 'SELECT fn_' . static::$table . '_area_code_exists(:company_id, :area_code) area_code_exists';

                $stmt = $connection->prepare($sql);

                $stmt->bindParam(':company_id', $_SESSION['company_id'], PDO::PARAM_INT);
                $stmt->bindParam(':area_code', $area_code, PDO::PARAM_STR);

                $stmt->execute();

                $result = $stmt->fetch();

                if (!$result['area_code_exists']) {
                    $area_code_exists = false;
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage() . '<br>';
            }
        }

        return $area_code_exists;
    }

    public static function get_all($connection) {
        $countries = array();

        $results = parent::get_all($connection);

        if (count($results)) {
            foreach ($results as $row) {
                $countries[] = new Country(
                    $row['company_id'],
                    $row['id'],
                    $row['name'],
                    $row['area_code'],
                    $row['active'],
                    $row['created_at'],
                    $row['updated_at']
                );
            }
        }

        return $countries;
    }

    public static function get_all_active($connection) {
        $countries = array();

        $results = parent::get_all_active($connection);

        if (count($results)) {
            foreach ($results as $row) {
                $countries[] = new Country(
                    $row['company_id'],
                    $row['id'],
                    $row['name'],
                    $row['area_code'],
                    $row['active'],
                    $row['created_at'],
                    $row['updated_at']
                );
            }
        }

        return $countries;
    }

    public static function get_by_id($connection, $id) {
        $country = null;

        $result = parent::get_by_id($connection, $id);

        if (!empty($result)) {
            $country = new Country(
                $result['company_id'],
                $result['id'],
                $result['name'],
                $result['area_code'],
                $result['active'],
                $result['created_at'],
                $result['updated_at']
            );
        }

        return $country;
    }

    public static function get_by_name($connection, $name) {
        $countries = array();

        $results = parent::get_by_name($connection, $name);

        if (count($results)) {
            foreach ($results as $row) {
                $countries[] = new Country(
                    $row['company_id'],
                    $row['id'],
                    $row['name'],
                    $row['area_code'],
                    $row['active'],
                    $row['created_at'],
                    $row['updated_at']
                );
            }
        }

        return $countries;
    }

    public static function insert($connection, $country) {
        $country_inserted = false;

        if (isset($connection)) {
            try {
                $sql = 'CALL sp_' . static::$table . '_insert(:user_id, :company_id, 0, :name, :area_code, :active)';

                $name = $country->get_name();
                $area_code = $country->get_area_code();
                $active = $country->is_active();

                $stmt = $connection->prepare($sql);

                $stmt->bindParam(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
                $stmt->bindParam(':company_id', $_SESSION['company_id'], PDO::PARAM_INT);
                $stmt->bindParam(':name', $name, PDO::PARAM_STR);
                $stmt->bindParam(':area_code', $area_code, PDO::PARAM_STR);
                $stmt->bindParam(':active', $active, PDO::PARAM_BOOL);

                $country_inserted = $stmt->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage() . '<br>';
            }
        }

        return $country_inserted;
    }

    public static function update($connection, $country) {
        $country_updated = false;

        if (isset($connection)) {
            try {
                $sql = 'CALL sp_' . static::$table . '_update(:user_id, :company_id, :id, :name, :area_code, :active)';

                $id = $country->get_id();
                $name = $country->get_name();
                $area_code = $country->get_area_code();
                $active = $country->is_active();

                $stmt = $connection->prepare($sql);

                $stmt->bindParam(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
                $stmt->bindParam(':company_id', $_SESSION['company_id'], PDO::PARAM_INT);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->bindParam(':name', $name, PDO::PARAM_STR);
                $stmt->bindParam(':area_code', $area_code, PDO::PARAM_STR);
                $stmt->bindParam(':active', $active, PDO::PARAM_BOOL);

                $country_updated = $stmt->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage() . '<br>';
            }
        }

        return $country_updated;
    }

}