<?php
echo $this->extend('template_by_nofal');
echo $this->section('content') ?>

<style>
    td {
        text-transform: uppercase;
    }

    .wu {
        background-color: purple;
    }

    .wg {
        background-color: green;
    }

    .wp {
        background-color: white;
    }

    .wk {
        background-color: yellow;
    }

    .ts {
        color: grey;
    }

    .tp {
        color: white;
    }
</style>

<div class="container konten">

    <table class="table table-bordered text-center mt-5">
        <tr>
            <td rowspan="2">Minggu ke</td>
            <td colspan="7" class="text-center table-info">September 2022</td>
        </tr>
        <tr class="bg-success text-white">
            <td>sabtu</td>
            <td>minggu</td>
            <td>senin</td>
            <td>selasa</td>
            <td>rabu</td>
            <td>kamis</td>
            <td style="background-color: red;">jumat</td>
        </tr>
        <tr>
            <td rowspan="6">I</td>
        </tr>
        <tr class="ts">
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td>31</td>
            <td class="text-dark">1</td>
            <td class="text-danger"><b>2</b></td>
        </tr>
        <tr class="wu">
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td class="text-danger bg-white"><b>9</b></td>
        </tr>
        <tr class="wu">
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td style="background-color: yellow;">15</td>
            <td class="text-danger bg-white"><b>16</b></td>
        </tr>
        <tr class="wu">
            <td style="background-color: yellow;">17</td>
            <td style="background-color: yellow;">18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td style="background-color: white;">22</td>
            <td class="text-danger bg-white"><b>23</b></td>
        </tr>
        <tr class="bg-success">
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td class="text-danger bg-white"><b>30</b></td>
        </tr>
        <tr>
            <td></td>
        </tr>
    </table>
    <table class="table table-bordered text-center mt-5">
        <tr>
            <td rowspan="2">Minggu ke</td>
            <td colspan="7" class="text-center table-info">Oktober 2022</td>
        </tr>
        <tr class="wg tp">
            <td>sabtu</td>
            <td>minggu</td>
            <td>senin</td>
            <td>selasa</td>
            <td>rabu</td>
            <td>kamis</td>
            <td style="background-color: red;">jumat</td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">II</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td><b>6</b></td>
            <td class="text-danger bg-white"><b>7</b></td>
        </tr>
        <tr>

        </tr>
        <tr class="bg-success">
            <td class="bg-white">III</td>
            <td style="background-color: red;">8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td class="text-danger bg-white"><b>14</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">IV</td>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td class="text-danger bg-white"><b>21</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">V</td>
            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <td class="text-danger bg-white"><b>28</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">VI</td>
            <td>29</td>
            <td>30</td>
            <td>31</td>
            <td class="bg-white"></td>
            <td class="bg-white"></td>
            <td class="bg-white"></td>
            <td class="bg-white"></td>
        </tr>
        <tr>
            <td colspan="8">8 : Maulid Nabi saw</td>
        </tr>
    </table>
    <table class="table table-bordered text-center mt-5">
        <tr>
            <td rowspan="2">Minggu ke</td>
            <td colspan="7" class="text-center table-info">November 2022</td>
        </tr>
        <tr class="wg tp">
            <td>sabtu</td>
            <td>minggu</td>
            <td>senin</td>
            <td>selasa</td>
            <td>rabu</td>
            <td>kamis</td>
            <td style="background-color: red;">jumat</td>
        </tr>
        <tr>
            <td>VI</td>
            <td></td>
            <td></td>
            <td></td>
            <td class="bg-success">1</td>
            <td class="bg-success">2</td>
            <td class="bg-success"><b>3</b></td>
            <td class="text-danger"><b>4</b></td>
        </tr>
        <tr>

        </tr>
        <tr class="bg-success">
            <td class="bg-white">VII</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td class="text-danger bg-white"><b>11</b></td>
        </tr>
        <tr class="bg-warning">
            <td class="bg-white">VIII</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td class="text-danger bg-white"><b>18</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">IX</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td class="text-danger bg-white"><b>25</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">X</td>
            <td>26</td>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td class="bg-white ts">1</td>
            <td class="bg-white  ts">2</td>
        </tr>
        <tr>
            <td></td>
        </tr>
    </table>
    <table class="table table-bordered text-center mt-5">
        <tr>
            <td rowspan="2">Minggu ke</td>
            <td colspan="7" class="text-center table-info">Desember 2022</td>
        </tr>
        <tr class="wg tp">
            <td>sabtu</td>
            <td>minggu</td>
            <td>senin</td>
            <td>selasa</td>
            <td>rabu</td>
            <td>kamis</td>
            <td style="background-color: red;">jumat</td>
        </tr>
        <tr class="ts">
            <td></td>
            <td>26</td>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td class="text-dark bg-success"><b>1</b></td>
            <td class="text-danger"><b>2</b></td>
        </tr>
        <tr>

        </tr>
        <tr class="bg-success">
            <td class="bg-white">XI</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td class="text-danger bg-white"><b>9</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">XII</td>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td class="text-danger bg-white"><b>16</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">XIII</td>
            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td class="text-danger bg-white"><b>23</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">XIV</td>
            <td>24</td>
            <td style="background-color: red;">25</td>
            <td>26</td>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td class="text-danger bg-white">30</td>
        </tr>
        <tr>
            <td></td>
            <td class="bg-success">31</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="8">25 : Hari Natal</td>
        </tr>
    </table>
    <table class="table table-bordered text-center mt-5">
        <tr>
            <td rowspan="2">Minggu ke</td>
            <td colspan="7" class="text-center table-info">Januari 2023</td>
        </tr>
        <tr class="wg tp">
            <td>sabtu</td>
            <td>minggu</td>
            <td>senin</td>
            <td>selasa</td>
            <td>rabu</td>
            <td>kamis</td>
            <td style="background-color: red;">jumat</td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">XV</td>
            <td class="bg-white"></td>
            <td style="background-color: red;">1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td><b>5</b></td>
            <td class="text-danger bg-white"><b>6</b></td>
        </tr>
        <tr>

        </tr>
        <tr class="bg-info">
            <td class="bg-white"></td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td class="text-danger bg-white"><b>13</b></td>
        </tr>
        <tr class="bg-warning">
            <td class="bg-white">XVI</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td class="text-danger bg-white"><b>20</b></td>
        </tr>
        <tr>
            <td></td>
            <td>21</td>
            <td style="background-color: red;">22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td class="text-danger"><b>27</b></td>
        </tr>
        <tr>
            <td></td>
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td>31</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="8">1 : tahun baru masehi, 22 : tahun baru imlek</td>
        </tr>
    </table>
    <table class="table table-bordered text-center mt-5">
        <tr>
            <td rowspan="2">Minggu ke</td>
            <td colspan="7" class="text-center table-info">Februari 2023</td>
        </tr>
        <tr class="wg tp">
            <td>sabtu</td>
            <td>minggu</td>
            <td>senin</td>
            <td>selasa</td>
            <td>rabu</td>
            <td>kamis</td>
            <td style="background-color: red;">jumat</td>
        </tr>
        <tr>
            <td></td>
            <td class="ts">28</td>
            <td class="ts">29</td>
            <td class="ts">30</td>
            <td class="ts">31</td>
            <td>1</td>
            <td><b>2</b></td>
            <td class="text-danger"><b>3</b></td>
        </tr>
        <tr>

        </tr>
        <tr class="wu">
            <td class="bg-white"></td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td class="text-danger bg-white"><b>10</b></td>
        </tr>
        <tr class="wu">
            <td class="bg-white"></td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <td class="text-danger bg-white"><b>17</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">I</td>
            <td style="background-color: red;">18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <td class="text-danger bg-white"><b>24</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">II</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <td>28</td>
            <td class="bg-white"></td>
            <td class="bg-white"></td>
            <td class="bg-white"></td>
        </tr>
        <tr>
            <td colspan="8">18 : Isra'miraj'</td>
        </tr>
    </table>
    <table class="table table-bordered text-center mt-5">
        <tr>
            <td rowspan="2">Minggu ke</td>
            <td colspan="7" class="text-center table-info">Maret 2023</td>
        </tr>
        <tr class="wg tp">
            <td>sabtu</td>
            <td>minggu</td>
            <td>senin</td>
            <td>selasa</td>
            <td>rabu</td>
            <td>kamis</td>
            <td style="background-color: red;">jumat</td>
        </tr>
        <tr>
            <td></td>
            <td class="ts">25</td>
            <td class="ts">26</td>
            <td class="ts">27</td>
            <td class="ts">28</td>
            <td class="bg-success">1</td>
            <td class="bg-success"><b>2</b></td>
            <td class="text-danger"><b>3</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">III</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td class="text-danger bg-white"><b>10</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">IV</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <td class="text-danger bg-white"><b>17</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">V</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td style="background-color: red;">22</td>
            <td>23</td>
            <td class="text-danger bg-white"><b>24</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">VI</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td class="text-danger bg-white">31</td>
        </tr>
        <tr>
            <td colspan="8">22 : tahun baru nyepi</td>
        </tr>
    </table>
    <table class="table table-bordered text-center mt-5">
        <tr>
            <td rowspan="2">Minggu ke</td>
            <td colspan="7" class="text-center table-info">April 2023</td>
        </tr>
        <tr class="wg tp">
            <td>sabtu</td>
            <td>minggu</td>
            <td>senin</td>
            <td>selasa</td>
            <td>rabu</td>
            <td>kamis</td>
            <td style="background-color: red;">jumat</td>
        </tr>
        <tr class="ts">
            <td></td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td><b>30</b></td>
            <td class="ts"><b>31</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">VII</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td class="text-danger bg-white"><b>7</b></td>
        </tr>
        <tr class="bg-warning">
            <td class="bg-white">VII</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td class="text-danger bg-white"><b>14</b></td>
        </tr>
        <tr>
            <td></td>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td class="text-danger"><b>21</b></td>
        </tr>
        <tr>
            <td></td>
            <td style="background-color: red;">22</td>
            <td style="background-color: red;">23</td>
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <td class="text-danger">28</td>
        </tr>
        <tr>
            <td></td>
            <td>29</td>
            <td>30</td>
        </tr>
        <tr>
            <td colspan="8">7 : jumat agung,
                22 : hari raya idul fitri, 23 : cuti hari raya idul fitri
            </td>
        </tr>
    </table>
    <table class="table table-bordered text-center mt-5">
        <tr>
            <td rowspan="2">Minggu ke</td>
            <td colspan="7" class="text-center table-info">Mei 2023</td>
        </tr>
        <tr class="wg tp">
            <td>sabtu</td>
            <td>minggu</td>
            <td>senin</td>
            <td>selasa</td>
            <td>rabu</td>
            <td>kamis</td>
            <td style="background-color: red;">jumat</td>
        </tr>
        <tr>
            <td></td>
            <td class="ts">29</td>
            <td class="ts">30</td>
            <td style="background-color: red;">1</td>
            <td>2</td>
            <td>3</td>
            <td><b>4</b></td>
            <td class="ts"><b>5</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">IX</td>
            <td style="background-color: red;">6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td class="text-danger bg-white"><b>12</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">X</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td style="background-color: red;">18</td>
            <td class="text-danger bg-white"><b>19</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">XI</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
            <td class="text-danger bg-white"><b>26</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">XII</td>
            <td>27</td>
            <td>28</td>
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td>31</td>
            <td class="bg-white"></td>
        </tr>
        <tr>
            <td colspan="8">1 : hari buruh, 6 : hari raya waisak, 18 : kenaikan isa al masih</td>
        </tr>
    </table>
    <table class="table table-bordered text-center mt-5">
        <tr>
            <td rowspan="2">Minggu ke</td>
            <td colspan="7" class="text-center table-info">Juni 2023</td>
        </tr>
        <tr class="wg tp">
            <td>sabtu</td>
            <td>minggu</td>
            <td>senin</td>
            <td>selasa</td>
            <td>rabu</td>
            <td>kamis</td>
            <td style="background-color: red;">jumat</td>
        </tr>
        <tr class="ts">
            <td></td>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td>31</td>
            <td style="background-color: red;" class="text-dark"><b>1</b></td>
            <td class="text-danger"><b>2</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">XII</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td class="text-danger bg-white"><b>9</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">XIV</td>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td class="text-danger bg-white"><b>16</b></td>
        </tr>
        <tr class="bg-success">
            <td class="bg-white">XV</td>
            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td class="text-danger bg-white"><b>23</b></td>
        </tr>
        <tr class="bg-info">
            <td class="bg-white"></td>
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <td>28</td>
            <td style="background-color: red;">29</td>
            <td class="text-danger bg-white">30</td>
        </tr>
        <tr>
            <td colspan="8">1 : hari lahir pancasila, 29 : hari raya idul adha</td>
        </tr>
    </table>
    <table class="table table-bordered text-center mt-5">
        <tr>
            <td rowspan="2">Minggu ke</td>
            <td colspan="7" class="text-center table-info">Juli 2023</td>
        </tr>
        <tr class="wg tp">
            <td>sabtu</td>
            <td>minggu</td>
            <td>senin</td>
            <td>selasa</td>
            <td>rabu</td>
            <td>kamis</td>
            <td style="background-color: red;">jumat</td>
        </tr>
        <tr class="bg-warning">
            <td class="bg-white">XVI</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td><b>6</b></td>
            <td class="text-danger bg-white"><b>7</b></td>
        </tr>
        <tr>
            <td></td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td class="text-danger bg-white"><b>14</b></td>
        </tr>
        <tr>
            <td></td>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
            <td style="background-color: red;">19</td>
            <td>20</td>
            <td class="text-danger bg-white"><b>21</b></td>
        </tr>
        <tr>
            <td></td>
            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
            <td class="text-danger">28</td>
        </tr>
        <tr>
            <td></td>
            <td><b>29</b></td>
            <td>30</td>
            <td>31</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="8">19 juli : tahun baru islam</td>
        </tr>
    </table>
    <table class="table table-bordered text-center mt-5">
        <tr>
            <td rowspan="2">Minggu ke</td>
            <td colspan="7" class="text-center table-info">Agustus 2023</td>
        </tr>
        <tr class="wg tp">
            <td>sabtu</td>
            <td>minggu</td>
            <td>senin</td>
            <td>selasa</td>
            <td>rabu</td>
            <td>kamis</td>
            <td style="background-color: red;">jumat</td>
        </tr>
        <tr>
            <td></td>
            <td class="ts">29</td>
            <td class="ts">30</td>
            <td class="ts">31</td>
            <td>1</td>
            <td>2</td>
            <td><b>3</b></td>
            <td class="text-danger"><b>4</b></td>
        </tr>
        <tr>
            <td></td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td class="text-danger">11</td>
        </tr>
        <tr>
            <td></td>
            <td><b>12</b></td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <td style="background-color: red;">17</td>
            <td class="text-danger">18</td>
        </tr>
        <tr>
            <td></td>
            <td>19</td>
            <td><b>20</b></td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td class="text-danger">25</td>
        </tr>
        <tr>
            <td></td>
            <td>26</td>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td>31</td>
        </tr>
        <tr>
            <td colspan="8">17 : hari kemerdekaan ri</td>
        </tr>
    </table>
    <div class="row">
        <div class="col-sm-5">
            <table class="table table-bordered mt-5">
                <tr>
                    <td class="bg-success" style="width: 40px !important;"></td>
                    <td style="width: 50px !important;">hari aktif perkuliahan</td>
                </tr>
                <tr>
                    <td class="bg-white "></td>
                    <td>hari libur perkuliahan</td>
                </tr>
                <tr>
                    <td class="bg-warning "></td>
                    <td>UTS/UAS</td>
                </tr>
                <tr>
                    <td style="background-color: purple;"></td>
                    <td>her registrasi mahasiswa krs</td>
                </tr>
                <tr>
                    <td style="background-color: yellow;"></td>
                    <td>masa orientasi siswa baru</td>
                </tr>
                <tr>
                    <td style="background-color: red;"></td>
                    <td>libur nasional</td>
                </tr>
                <tr>
                    <td class="bg-info"></td>
                    <td>minggu tenang</td>
                </tr>
            </table>
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4"></div>
    </div>
    </b>


    <h5 class="text-center"> Jadwal Kegiatan Akademik Unwaha Tahun 2022/2023 </h5>
    <div class="row">
        <div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th> Waktu Pelaksanaan </th>
                        <th> Nama Kegiatan </th>
                        <th> Keterangan </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> 3 - 21 September 2022 </td>
                        <td> Herregistrasi smt ganjil Mahasiswa (KHS dan KRS)</td>
                        <td> Mhs lama (selain maba) </td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> 13 - 16 September 2022 </td>
                        <td> Kegiatan Pengenalan kehidupan Kampus Mahasiswa Baru</td>
                        <td> Mahasiswa Baru </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> 15 - 18 September 2022 </td>
                        <td> Kegiatan Pengenalan kehidupan Kampus Mahasiswa Baru</td>
                        <td> Mhs Baru</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td> 24 September 2022 - 5 Januari 2023 </td>
                        <td> Perkuliahan semester ganjil </td>
                        <td> Seluruh Mhs </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td> 12 - 17 November 2022 </td>
                        <td> Pelaksanaan Ujian Tengah semester ganjil </td>
                        <td> Seluruh Mhs</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td> 14 - 19 Januari 2023 </td>
                        <td> Pelaksanaan Ujian Akhur semester ganjil</td>
                        <td> Seluruh Mhs</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td> 8 - 16 Februari 2023 </td>
                        <td> Herregistrasi semester genap </td>
                        <td> Seluruh Mhs</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td> 19 Februari - 22 Februari 2023 </td>
                        <td> Perkuliahan semester genap </td>
                        <td> Seluruh Mhs </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td> 8 Februari - 13 April 2023 </td>
                        <td> Pelaksanaan Ujian Tengah semester genap </td>
                        <td> Seluruh Mhs</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td> 1 - 6 Juli 2023 </td>
                        <td> Pelaksanaan Ujian Akhir semester genap </td>
                        <td> Seluruh Mhs </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td> September 2022 - Oktober 2023 </td>
                        <td> Pelaksanaan Kuliah Kerja Nyata Mahasiswa smt 7 </td>
                        <td> Seluruh Mhs</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td> November 2022 - Januari 2023 </td>
                        <td> Pelaksanaan Magang, PKL dan PPL (Magang FE, FTI, dan ES, PKL FP dan PPL FIP, PAI, PBA) </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td> Januari - Agustus 2023 </td>
                        <td> Pelaksanaan Tugas Akhir mahasiswa </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td> Februari - Juni 2023 </td>
                        <td> Pelaksanaan Tes Kecakapan bhs dan komputer oleh Lembaga bhs dan Komputer Unwaha </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td> Agustus - September 2023 </td>
                        <td> Yudisium </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td> Oktober 2022 - Januari 2023 </td>
                        <td> Pelaksanaan seminar kewirausahaan mahasiswa (Seluruh mhs yg menempuh MK kewirausahaan di smt ganjil dan dilakasanakan tiap Fakultas)</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php echo $this->endSection() ?>