<?php

using('System');
include 'tmpclass.php';

//declare(ticks=1);
class app_App extends System_Object {

    public function Run() {

        $t = System_Tuple::Create('aa', 'bb', 'cc');
        echo $t->Item1;
        echo System_Environment::NewLine;
        echo $t->Item2;
        echo System_Environment::NewLine;
        echo $t->Item3;
        echo System_Environment::NewLine;
        try {
            echo $t->Item4;
        } catch (System_Exception $ex) {
            echo $ex;
        }
        echo System_Environment::NewLine;
        echo System_Environment::NewLine;

        $r = new System_Random();
        $buffer = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        echo $r->NextBytes($buffer);
        print_r($buffer);
        echo System_Environment::NewLine;

        $e1 = new System_EventArgs();
        $e2 = System_EventArgs::$Empty;

        echo System_Environment::NewLine . 'equals' . System_Environment::NewLine;
        try {
            echo $e1 . System_Environment::NewLine;
            echo $e2 . System_Environment::NewLine;
            echo $e1->Equals($e1) ? 'ok' : 'fail';
            echo $e1->Equals($e2) ? 'ok' : 'fail';
            echo $e2->Equals($e2) ? 'ok' : 'fail';
        } catch (Exception $ex) {
            echo $ex;
        }
        echo System_Environment::NewLine . 'end' . System_Environment::NewLine;
        echo System_Environment::NewLine;

        echo System_Environment::getTickCount();
        echo System_Environment::NewLine;

        try {
            echo System_Environment::getVersion();
        } catch (Exception $ex) {
            echo 'System_Environment::getVersion();';
        }
        //throw new System_PlatformNotSupportedException();


        echo System_Environment::NewLine;
        echo System_Environment::NewLine;

//        function profiler() {
//            //for ($i = 0; $i < 10; $i++) {
//            echo 'A';
//            //}
//        }
//
//        register_tick_function('profiler');
//        $numbers = array();
//        for ($i = 0; $i < 10; $i++) {
//            print($i . "<br />");
//        }
//
//        echo 'B';

        echo System_Environment::NewLine;
        echo System_Environment::NewLine;
        try {
            //throw new System_SystemException();
            $t = new tmpclass();
            $t->A();
        } catch (System_Exception $ex) {
            echo $ex->ToString();
        }
    }

    //<editor-fold desc="Constructors" defaultstate="collapsed">
    //</editor-fold>
    //<editor-fold desc="Properties" defaultstate="collapsed">
    //</editor-fold>
    //<editor-fold desc="Methods" defaultstate="collapsed">
    //</editor-fold>
    //<editor-fold desc="Operators" defaultstate="collapsed">
    //</editor-fold>
    //<editor-fold desc="Fields" defaultstate="collapsed">
    //</editor-fold>
}

?>