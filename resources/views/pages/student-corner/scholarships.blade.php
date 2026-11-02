@extends('layouts.app')

@section('title', 'Scholaships | Symbiosis Institute of Geoinformatic')

@section('description', 'Scholaships')

@section('banner')
<div class="inner_banner_section">
    <div class="inner_banner_imgbox">
        <div class="banner_imgbox">
            <img src="{{ asset('assets/images/inner-banner.webp') }}" alt="Inner Banner Image"
                class="img-fluid inner_desktop_banner_image">
            <img src="{{ asset('assets/images/mobile-inner-banner.webp') }}" alt="Inner Banner Image"
                class="img-fluid inner_mobile_banner_image">
        </div>
    </div>
    <div class="inner_banner_overlay_box"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner_banner_mainbox">
                    <div class="inner_banner_headingbox">
                        <h1 class="inner_banner_heading"><span>Scholarship</span></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a
                                        href="{{ route('pages.student-corner.student-corner') }}">Student Corner</a>
                                <li class="breadcrumb-item active" aria-current="page">Scholarship</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="inner_banner_rightbox"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

<main class="student_corner_main one_liner_heading">
    <section class="acheivement_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="scholorship_mainbox">
                        <h2 class="inner_heading">Symbiosis Institute of Geoinformatics</h2>
                        <p>We are happy to inform you that the Scholarship Committee has approved of Merit Scholarship
                            Fee of following Student details are below,</p>
                        <div class="my_tabbing scrollable-tabbing">
                            <div class="tab-navigation-wrapper">

                                <button type="button" class="tab-scroll-btn tab-prev" aria-label="Previous tabs">
                                    &#10094;
                                </button>

                                <div class="tab-navigation-scroll">
                                    <ul class="nav nav-tabs custom-tabs" id="batchTabs" role="tablist">

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="batch-2025-tab" data-bs-toggle="tab"
                                                data-bs-target="#batch-2025" type="button" role="tab">
                                                2025-2026
                                            </button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="batch-2024-tab" data-bs-toggle="tab"
                                                data-bs-target="#batch-2024" type="button" role="tab">
                                                2024-2025
                                            </button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="batch-2023-tab" data-bs-toggle="tab"
                                                data-bs-target="#batch-2023" type="button" role="tab">
                                                2023-2024
                                            </button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="batch-2022-tab" data-bs-toggle="tab"
                                                data-bs-target="#batch-2022" type="button" role="tab">
                                                2022-2023
                                            </button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="batch-2021-tab" data-bs-toggle="tab"
                                                data-bs-target="#batch-2021" type="button" role="tab">
                                                2021-2022
                                            </button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="batch-2020-tab" data-bs-toggle="tab"
                                                data-bs-target="#batch-2020" type="button" role="tab">
                                                2020-2021
                                            </button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="batch-2019-tab" data-bs-toggle="tab"
                                                data-bs-target="#batch-2019" type="button" role="tab">
                                                2019-2020
                                            </button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="batch-2018-tab" data-bs-toggle="tab"
                                                data-bs-target="#batch-2018" type="button" role="tab">
                                                2018-2019
                                            </button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="batch-2017-tab" data-bs-toggle="tab"
                                                data-bs-target="#batch-2017" type="button" role="tab">
                                                2017-2018
                                            </button>
                                        </li>

                                    </ul>
                                </div>

                                <button type="button" class="tab-scroll-btn tab-next" aria-label="Next tabs">
                                    &#10095;
                                </button>

                            </div>
                            <div class="tab-content" id="batchTabsContent">
                                <div class="tab-pane fade show active" id="batch-2025" role="tabpanel">
                                    <div class="program_structure_content">
                                        <div class="program_structure_listing">
                                            <h2 class="program_structure_heading">SIU PG Merit Scholarship 2025-2026</h2>
                                            <div class="table-responsive">
                                                <table class="table mb-0 fee_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>PRN</th>
                                                            <th>Financial Year</th>
                                                            <th>Name of the Student</th>
                                                            <th>Type of Scholarship</th>
                                                            <th>Programme Name</th>
                                                            <th>Batch</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr><td>1</td><td>24070241041</td><td>2025-26</td><td>Ms. Monomita Chatterjee</td><td>PG Merit Sem 3</td><td>Master of Science (Geoinformatics)</td><td>2024-26</td></tr>
                                                        <tr><td>2</td><td>24070241009</td><td>2025-26</td><td>Ms. Anisha Mukherjee</td><td>PG Merit Sem 3</td><td>Master of Science (Geoinformatics)</td><td>2024-26</td></tr>
                                                        <tr><td>3</td><td>24070241021</td><td>2025-26</td><td>Mr. Cheekati Sarath Kumar</td><td>PG Merit Sem 3</td><td>Master of Science (Geoinformatics)</td><td>2024-26</td></tr>
                                                        <tr><td>4</td><td>24070241053</td><td>2025-26</td><td>Ms. Riddhima Saha</td><td>PG Merit Sem 3</td><td>Master of Science (Geoinformatics)</td><td>2024-26</td></tr>
                                                        <tr><td>5</td><td>25070241024</td><td>2025-26</td><td>Mr. Devansh Negi</td><td>PG Merit Sem 1</td><td>Master of Science (Geoinformatics)</td><td>2025-27</td></tr>
                                                        <tr><td>6</td><td>25070241071</td><td>2025-26</td><td>Mr. Swapnanil Saha</td><td>PG Merit Sem 1</td><td>Master of Science (Geoinformatics)</td><td>2025-27</td></tr>
                                                        <tr><td>7</td><td>25070241074</td><td>2025-26</td><td>Ms. Tiasa Debnath</td><td>PG Merit Sem 1</td><td>Master of Science (Geoinformatics)</td><td>2025-27</td></tr>
                                                        <tr><td>8</td><td>25070241045</td><td>2025-26</td><td>Mr. S Karthika</td><td>PG Merit Sem 1</td><td>Master of Science (Geoinformatics)</td><td>2025-27</td></tr>
                                                        <tr><td>9</td><td>24070243048</td><td>2025-26</td><td>Mr. Sandip Shaw</td><td>PG Merit Sem 3</td><td>Master of Science (Data Science &amp; Spatial Analytics)</td><td>2024-26</td></tr>
                                                        <tr><td>10</td><td>24070243055</td><td>2025-26</td><td>Mr. Upayan Chaudhuri</td><td>PG Merit Sem 3</td><td>Master of Science (Data Science &amp; Spatial Analytics)</td><td>2024-26</td></tr>
                                                        <tr><td>11</td><td>24070243057</td><td>2025-26</td><td>Mr. Vartak Vedant Subhash</td><td>PG Merit Sem 3</td><td>Master of Science (Data Science &amp; Spatial Analytics)</td><td>2024-26</td></tr>
                                                        <tr><td>12</td><td>24070243059</td><td>2025-26</td><td>Ms. Aatreyi Dutt</td><td>PG Merit Sem 3</td><td>Master of Science (Data Science &amp; Spatial Analytics)</td><td>2024-26</td></tr>
                                                        <tr><td>13</td><td>25070243036</td><td>2025-26</td><td>Mr. Tanuj</td><td>PG Merit Sem 1</td><td>Master of Science (Data Science &amp; Spatial Analytics)</td><td>2025-27</td></tr>
                                                        <tr><td>14</td><td>25070243035</td><td>2025-26</td><td>Ms. Sipra Sailendra Patra</td><td>PG Merit Sem 1</td><td>Master of Science (Data Science &amp; Spatial Analytics)</td><td>2025-27</td></tr>
                                                        <tr><td>15</td><td>25070243019</td><td>2025-26</td><td>Mr. Manas Ranjan Patra</td><td>PG Merit Sem 1</td><td>Master of Science (Data Science &amp; Spatial Analytics)</td><td>2025-27</td></tr>
                                                        <tr><td>16</td><td>25070243008</td><td>2025-26</td><td>Mr. Bhamidipati Karthikeya</td><td>PG Merit Sem 1</td><td>Master of Science (Data Science &amp; Spatial Analytics)</td><td>2025-27</td></tr>
                                                        <tr><td>17</td><td>24070146019</td><td>2025-26</td><td>Ms. Trishita Podder</td><td>PG Merit Sem 3</td><td>Master of Technology (Geo-informatics)</td><td>2024-26</td></tr>
                                                        <tr><td>18</td><td>24070146015</td><td>2025-26</td><td>Ms. Sampuma Saha</td><td>PG Merit Sem 3</td><td>Master of Technology (Geo-informatics)</td><td>2024-26</td></tr>
                                                        <tr><td>19</td><td>24070146001</td><td>2025-26</td><td>Ms. Bange Pallavi</td><td>PG Merit Sem 3</td><td>Master of Technology (Geo-informatics)</td><td>2024-26</td></tr>
                                                        <tr><td>20</td><td>24070146018</td><td>2025-26</td><td>Ms. Rutuja Rakesh Tendulkar</td><td>PG Merit Sem 3</td><td>Master of Technology (Geo-informatics)</td><td>2024-26</td></tr>
                                                        <tr><td>21</td><td>25070146002</td><td>2025-26</td><td>Mr. Bhoir Manthan Santosh</td><td>PG Merit Sem 1</td><td>Master of Technology (Geo-informatics)</td><td>2025-27</td></tr>
                                                        <tr><td>22</td><td>25070146018</td><td>2025-26</td><td>Ms. Wash Archita Vaibhav</td><td>PG Merit Sem 1</td><td>Master of Technology (Geo-informatics)</td><td>2025-27</td></tr>
                                                        <tr><td>23</td><td>25070146003</td><td>2025-26</td><td>Ms. Bidushee Kanungo</td><td>PG Merit Sem 1</td><td>Master of Technology (Geo-informatics)</td><td>2025-27</td></tr>
                                                        <tr><td>24</td><td>25070146008</td><td>2025-26</td><td>Ms. Khade Reema Ravindra</td><td>PG Merit Sem 1</td><td>Master of Technology (Geo-informatics)</td><td>2025-27</td></tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="batch-2024" role="tabpanel">
                                    <div class="program_structure_content">
                                        <div class="program_structure_listing">
                                            <h2 class="program_structure_heading">SIU PG Merit Scholarship 2024-2025</h2>
                                            <div class="table-responsive">
                                                <table class="table mb-0 fee_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>PRN</th>
                                                            <th>Financial Year</th>
                                                            <th>Name of the Student</th>
                                                            <th>Type of Scholarship</th>
                                                            <th>Programme Name</th>
                                                            <th>Batch</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>23070241059</td>
                                                            <td>2024-25</td>
                                                            <td>Soham Das</td>
                                                            <td>PG Merit Sem3</td>
                                                            <td>Master of Science (Geoinformatics)</td>
                                                            <td>2023-25</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>23070241018</td>
                                                            <td>2024-25</td>
                                                            <td>Chayanika Ghosh</td>
                                                            <td>PG Merit Sem3</td>
                                                            <td>Master of Science (Geoinformatics)</td>
                                                            <td>2023-25</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>23070241067</td>
                                                            <td>2024-25</td>
                                                            <td>Sukanya Chakraborty</td>
                                                            <td>PG Merit Sem3</td>
                                                            <td>Master of Science (Geoinformatics)</td>
                                                            <td>2023-25</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>23070241027</td>
                                                            <td>2024-25</td>
                                                            <td>Kunal Tanwar</td>
                                                            <td>PG Merit Sem3</td>
                                                            <td>Master of Science (Geoinformatics)</td>
                                                            <td>2023-25</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>23070243044</td>
                                                            <td>2024-25</td>
                                                            <td>Sayanti Mukhopadhyay</td>
                                                            <td>PG Merit Sem3</td>
                                                            <td>Master of Science (Data Science &amp; Spatial Analytics)</td>
                                                            <td>2023-25</td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>23070243064</td>
                                                            <td>2024-25</td>
                                                            <td>P.Balaji</td>
                                                            <td>PG Merit Sem3</td>
                                                            <td>Master of Science (Data Science &amp; Spatial Analytics)</td>
                                                            <td>2023-25</td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>23070243047</td>
                                                            <td>2024-25</td>
                                                            <td>Siddhi Jadhav</td>
                                                            <td>PG Merit Sem3</td>
                                                            <td>Master of Science (Data Science &amp; Spatial Analytics)</td>
                                                            <td>2023-25</td>
                                                        </tr>
                                                        <tr>
                                                            <td>8</td>
                                                            <td>23070243043</td>
                                                            <td>2024-25</td>
                                                            <td>Sayali Doifode</td>
                                                            <td>PG Merit Sem3</td>
                                                            <td>Master of Science (Data Science &amp; Spatial Analytics)</td>
                                                            <td>2023-25</td>
                                                        </tr>
                                                        <tr>
                                                            <td>9</td>
                                                            <td>23070146008</td>
                                                            <td>2024-25</td>
                                                            <td>Shraddha Misal</td>
                                                            <td>PG Merit Sem3</td>
                                                            <td>Master of Technology (Geo-informatics and Surveying Technology)</td>
                                                            <td>2023-25</td>
                                                        </tr>
                                                        <tr>
                                                            <td>10</td>
                                                            <td>23070146011</td>
                                                            <td>2024-25</td>
                                                            <td>Anish Shelke</td>
                                                            <td>PG Merit Sem3</td>
                                                            <td>Master of Technology (Geo-informatics and Surveying Technology)</td>
                                                            <td>2023-25</td>
                                                        </tr>
                                                        <tr>
                                                            <td>11</td>
                                                            <td>23070146001</td>
                                                            <td>2024-25</td>
                                                            <td>Adrija Biswas</td>
                                                            <td>PG Merit Sem3</td>
                                                            <td>Master of Technology (Geo-informatics and Surveying Technology)</td>
                                                            <td>2023-25</td>
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td>23070146015</td>
                                                            <td>2024-25</td>
                                                            <td>Koustav Pramanik</td>
                                                            <td>PG Merit Sem3</td>
                                                            <td>Master of Technology (Geo-informatics and Surveying Technology)</td>
                                                            <td>2023-25</td>
                                                        </tr>
                                                        <tr>
                                                            <td>13</td>
                                                            <td>24070241009</td>
                                                            <td>2024-25</td>
                                                            <td>Anisha Mukherjee</td>
                                                            <td>PG Merit Sem1</td>
                                                            <td>Master of Science (Geoinformatics)</td>
                                                            <td>2024-26</td>
                                                        </tr>
                                                        <tr>
                                                            <td>14</td>
                                                            <td>24070241060</td>
                                                            <td>2024-25</td>
                                                            <td>Sarthak Das</td>
                                                            <td>PG Merit Sem1</td>
                                                            <td>Master of Science (Geoinformatics)</td>
                                                            <td>2024-26</td>
                                                        </tr>
                                                        <tr>
                                                            <td>15</td>
                                                            <td>24070241031</td>
                                                            <td>2024-25</td>
                                                            <td>Ishita Bandyopadhyay</td>
                                                            <td>PG Merit Sem1</td>
                                                            <td>Master of Science (Geoinformatics)</td>
                                                            <td>2024-26</td>
                                                        </tr>
                                                        <tr>
                                                            <td>16</td>
                                                            <td>24070241053</td>
                                                            <td>2024-25</td>
                                                            <td>Riddhima Saha</td>
                                                            <td>PG Merit Sem1</td>
                                                            <td>Master of Science (Geoinformatics)</td>
                                                            <td>2024-26</td>
                                                        </tr>
                                                        <tr>
                                                            <td>17</td>
                                                            <td>24070243055</td>
                                                            <td>2024-25</td>
                                                            <td>Upayan Chaudhuri</td>
                                                            <td>PG Merit Sem1</td>
                                                            <td>Master of Science (Data Science &amp; Spatial Analytics)</td>
                                                            <td>2024-26</td>
                                                        </tr>
                                                        <tr>
                                                            <td>18</td>
                                                            <td>24070243059</td>
                                                            <td>2024-25</td>
                                                            <td>Aatreyi Dutt</td>
                                                            <td>PG Merit Sem1</td>
                                                            <td>Master of Science (Data Science &amp; Spatial Analytics)</td>
                                                            <td>2024-26</td>
                                                        </tr>
                                                        <tr>
                                                            <td>19</td>
                                                            <td>24070243048</td>
                                                            <td>2024-25</td>
                                                            <td>Sandip Shaw</td>
                                                            <td>PG Merit Sem1</td>
                                                            <td>Master of Science (Data Science &amp; Spatial Analytics)</td>
                                                            <td>2024-26</td>
                                                        </tr>
                                                        <tr>
                                                            <td>20</td>
                                                            <td>24070243020</td>
                                                            <td>2024-25</td>
                                                            <td>Harnesswala Sarrah Shabbir</td>
                                                            <td>PG Merit Sem1</td>
                                                            <td>Master of Science (Data Science &amp; Spatial Analytics)</td>
                                                            <td>2024-26</td>
                                                        </tr>
                                                        <tr>
                                                            <td>21</td>
                                                            <td>24070146019</td>
                                                            <td>2024-25</td>
                                                            <td>Trishita Podder</td>
                                                            <td>PG Merit Sem1</td>
                                                            <td>Master of Technology (Geoinformatics)</td>
                                                            <td>2024-26</td>
                                                        </tr>
                                                        <tr>
                                                            <td>22</td>
                                                            <td>24070146015</td>
                                                            <td>2024-25</td>
                                                            <td>Sampurna Shah</td>
                                                            <td>PG Merit Sem1</td>
                                                            <td>Master of Technology (Geoinformatics)</td>
                                                            <td>2024-26</td>
                                                        </tr>
                                                        <tr>
                                                            <td>23</td>
                                                            <td>24070146009</td>
                                                            <td>2024-25</td>
                                                            <td>Moumita Bhattacharjee</td>
                                                            <td>PG Merit Sem1</td>
                                                            <td>Master of Technology (Geoinformatics)</td>
                                                            <td>2024-26</td>
                                                        </tr>
                                                        <tr>
                                                            <td>24</td>
                                                            <td>24070146012</td>
                                                            <td>2024-25</td>
                                                            <td>Aishwarya Pednekar</td>
                                                            <td>PG Merit Sem1</td>
                                                            <td>Master of Technology (Geoinformatics)</td>
                                                            <td>2024-26</td>
                                                        </tr>
                                                        <tr>
                                                            <td>25</td>
                                                            <td>24070241074</td>
                                                            <td>2024-25</td>
                                                            <td>Sneha Dey</td>
                                                            <td>NER Scholarship- Semester 1 &amp; 2</td>
                                                            <td>Master of Science (Geoinformatics)</td>
                                                            <td>2024-26</td>
                                                        </tr>
                                                        <tr>
                                                            <td>26</td>
                                                            <td>23070243037</td>
                                                            <td>2024-25</td>
                                                            <td>Ratul Banik</td>
                                                            <td>NER Scholarship- Semester 3 &amp; 4</td>
                                                            <td>Master of Science (Data Science &amp; Spatial Analytics)</td>
                                                            <td>2023-25</td>
                                                        </tr>



                                                        </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="batch-2023" role="tabpanel">
                                    <div class="program_structure_content">
                                        <div class="program_structure_listing">
                                            <h2 class="program_structure_heading">SIU PG Merit Scholarship 2023-2024</h2>
                                            <div class="table-responsive">
                                                <table class="table mb-0 fee_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>PRN</th>
                                                            <th>Financial Year</th>
                                                            <th>Name of the Student</th>
                                                            <th>Type of Scholarship</th>
                                                            <th>Programme Name</th>
                                                            <th>Batch</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                                <td>1</td>
                                                                <td>22070241057</td>
                                                                <td>2023-24</td>
                                                                <td>Rakesh Menon K.P.</td>
                                                                <td>PG Merit Sem3</td>
                                                                <td>Master of Science (Geoinformatics)</td>
                                                                <td>2022-24</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>22070241043</td>
                                                                <td>2023-24</td>
                                                                <td>M.D. Towfiq</td>
                                                                <td>PG Merit Sem3</td>
                                                                <td>Master of Science (Geoinformatics)</td>
                                                                <td>2022-24</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>22070241019</td>
                                                                <td>2023-24</td>
                                                                <td>Avisikta Majumder</td>
                                                                <td>PG Merit Sem3</td>
                                                                <td>Master of Science (Geoinformatics)</td>
                                                                <td>2022-24</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>22070241024</td>
                                                                <td>2023-24</td>
                                                                <td>Barnima Das</td>
                                                                <td>PG Merit Sem3</td>
                                                                <td>Master of Science (Geoinformatics)</td>
                                                                <td>2022-24</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>23070241059</td>
                                                                <td>2023-24</td>
                                                                <td>Soham Das</td>
                                                                <td>PG Merit Sem1</td>
                                                                <td>Master of Science (Geoinformatics)</td>
                                                                <td>2023-25</td>
                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>23070241027</td>
                                                                <td>2023-24</td>
                                                                <td>Kunal Tanwar</td>
                                                                <td>PG Merit Sem1</td>
                                                                <td>Master of Science (Geoinformatics)</td>
                                                                <td>2023-25</td>
                                                            </tr>
                                                            <tr>
                                                                <td>7</td>
                                                                <td>23070241018</td>
                                                                <td>2023-24</td>
                                                                <td>Chayanika Ghosh</td>
                                                                <td>PG Merit Sem1</td>
                                                                <td>Master of Science (Geoinformatics)</td>
                                                                <td>2023-25</td>
                                                            </tr>
                                                            <tr>
                                                                <td>8</td>
                                                                <td>23070241006</td>
                                                                <td>2023-24</td>
                                                                <td>Anisha Guin</td>
                                                                <td>PG Merit Sem1</td>
                                                                <td>Master of Science (Geoinformatics)</td>
                                                                <td>2023-25</td>
                                                            </tr>
                                                            <tr>
                                                                <td>9</td>
                                                                <td>22070243029</td>
                                                                <td>2023-24</td>
                                                                <td>Manu Mallika</td>
                                                                <td>PG Merit Sem3</td>
                                                                <td>Master of Science (Data Science &amp; Spatial Analytics)</td>
                                                                <td>2022-24</td>
                                                            </tr>
                                                            <tr>
                                                                <td>10</td>
                                                                <td>22070243007</td>
                                                                <td>2023-24</td>
                                                                <td>Ayush Mitra</td>
                                                                <td>PG Merit Sem3</td>
                                                                <td>Master of Science (Data Science &amp; Spatial Analytics)</td>
                                                                <td>2022-24</td>
                                                            </tr>
                                                            <tr>
                                                                <td>11</td>
                                                                <td>22070243018</td>
                                                                <td>2023-24</td>
                                                                <td>Divyanshu Singh Bisht</td>
                                                                <td>PG Merit Sem3</td>
                                                                <td>Master of Science (Data Science &amp; Spatial Analytics)</td>
                                                                <td>2022-24</td>
                                                            </tr>
                                                            <tr>
                                                                <td>12</td>
                                                                <td>22070243051</td>
                                                                <td>2023-24</td>
                                                                <td>Harsh Thakur</td>
                                                                <td>PG Merit Sem3</td>
                                                                <td>Master of Science (Data Science &amp; Spatial Analytics)</td>
                                                                <td>2022-24</td>
                                                            </tr>
                                                            <tr>
                                                                <td>13</td>
                                                                <td>23070243037</td>
                                                                <td>2023-24</td>
                                                                <td>Ratul Banik</td>
                                                                <td>PG Merit Sem1</td>
                                                                <td>Master of Science (Data Science &amp; Spatial Analytics)</td>
                                                                <td>2023-25</td>
                                                            </tr>
                                                            <tr>
                                                                <td>14</td>
                                                                <td>23070243044</td>
                                                                <td>2023-24</td>
                                                                <td>Sayanti Mukhopadhyay</td>
                                                                <td>PG Merit Sem1</td>
                                                                <td>Master of Science (Data Science &amp; Spatial Analytics)</td>
                                                                <td>2023-25</td>
                                                            </tr>
                                                            <tr>
                                                                <td>15</td>
                                                                <td>23070243043</td>
                                                                <td>2023-24</td>
                                                                <td>Sayali Doifode</td>
                                                                <td>PG Merit Sem1</td>
                                                                <td>Master of Science (Data Science &amp; Spatial Analytics)</td>
                                                                <td>2023-25</td>
                                                            </tr>
                                                            <tr>
                                                                <td>16</td>
                                                                <td>23070243064</td>
                                                                <td>2023-24</td>
                                                                <td>P.Balaji</td>
                                                                <td>PG Merit Sem1</td>
                                                                <td>Master of Science (Data Science &amp; Spatial Analytics)</td>
                                                                <td>2023-25</td>
                                                            </tr>
                                                            <tr>
                                                                <td>17</td>
                                                                <td>22070146012</td>
                                                                <td>2023-24</td>
                                                                <td>Prathamesh Patil</td>
                                                                <td>PG Merit Sem3</td>
                                                                <td>Master of Technology (Geo-informatics and Surveying Technology)</td>
                                                                <td>2022-24</td>
                                                            </tr>
                                                            <tr>
                                                                <td>18</td>
                                                                <td>22070146008</td>
                                                                <td>2023-24</td>
                                                                <td>Poonam Reure</td>
                                                                <td>PG Merit Sem3</td>
                                                                <td>Master of Technology (Geo-informatics and Surveying Technology)</td>
                                                                <td>2022-24</td>
                                                            </tr>
                                                            <tr>
                                                                <td>19</td>
                                                                <td>22070146009</td>
                                                                <td>2023-24</td>
                                                                <td>Aniket Sonawane</td>
                                                                <td>PG Merit Sem3</td>
                                                                <td>Master of Technology (Geo-informatics and Surveying Technology)</td>
                                                                <td>2022-24</td>
                                                            </tr>
                                                            <tr>
                                                                <td>20</td>
                                                                <td>22070146011</td>
                                                                <td>2023-24</td>
                                                                <td>Gagan Singhal</td>
                                                                <td>PG Merit Sem3</td>
                                                                <td>Master of Technology (Geo-informatics and Surveying Technology)</td>
                                                                <td>2022-24</td>
                                                            </tr>
                                                            <tr>
                                                                <td>21</td>
                                                                <td>23070146008</td>
                                                                <td>2023-24</td>
                                                                <td>Shraddha Misal</td>
                                                                <td>PG Merit Sem1</td>
                                                                <td>Master of Technology (Geo-informatics and Surveying Technology)</td>
                                                                <td>2023-25</td>
                                                            </tr>
                                                            <tr>
                                                                <td>22</td>
                                                                <td>23070146015</td>
                                                                <td>2023-24</td>
                                                                <td>Koustav Pramanik</td>
                                                                <td>PG Merit Sem1</td>
                                                                <td>Master of Technology (Geo-informatics and Surveying Technology)</td>
                                                                <td>2023-25</td>
                                                            </tr>
                                                            <tr>
                                                                <td>23</td>
                                                                <td>23070146006</td>
                                                                <td>2023-24</td>
                                                                <td>Gayatri Gurumurthy</td>
                                                                <td>PG Merit Sem1</td>
                                                                <td>Master of Technology (Geo-informatics and Surveying Technology)</td>
                                                                <td>2023-25</td>
                                                            </tr>
                                                            <tr>
                                                                <td>24</td>
                                                                <td>23070146004</td>
                                                                <td>2023-24</td>
                                                                <td>Dhnanjay Darade</td>
                                                                <td>PG Merit Sem1</td>
                                                                <td>Master of Technology (Geo-informatics and Surveying Technology)</td>
                                                                <td>2023-25</td>
                                                            </tr>
                                                        </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="batch-2022" role="tabpanel">
                                    <div class="program_structure_content">
                                        <div class="program_structure_listing">
                                            <h2 class="program_structure_heading">SIU PG Merit Scholarship 2022-2023</h2>
                                            <div class="table-responsive">
                                                <table class="table mb-0 fee_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>PRN</th>
                                                            <th>Financial Year</th>
                                                            <th>Name of the Student</th>
                                                            <th>Type of Scholarship</th>
                                                            <th>Programme Name</th>
                                                            <th>Batch</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                        <td>1.</td>
                                                        <td> 20070146005</td>
                                                        <td> 2022-23</td>
                                                        <td> Diksha Kolpe</td>
                                                        <td> PG Merit Sem4</td>
                                                        <td> Master of Technology (Geo-informatics and Surveying Technology)</td>
                                                        <td> 2020-22</td>
                                                        </tr>
                                                        <tr><td>2.</td><td> 20070146003</td><td> 2022-23</td><td> Ishan Seth</td><td>PG Merit Sem4</td><td> Master of Technology (Geo-informatics and Surveying Technology)</td><td> 2020-22</td></tr>
                                                        <tr><td>3.</td><td> 20070146010</td><td> 2022-23</td><td> Sameer Tupkar</td><td> PG Merit Sem4</td><td> Master of Technology (Geo-informatics and Surveying Technology)</td><td> 2020-22</td></tr>
                                                        <tr><td>4.</td><td> 20070146006</td><td> 2022-23</td><td> Priyanka More</td><td> PG Merit Sem4</td><td> Master of Technology (Geo-informatics and Surveying Technology)</td><td> 2020-22</td></tr>
                                                        <tr><td>5.</td><td> 21070146017</td><td> 2022-23</td><td> Rachana Gaikwad</td><td> PG Merit Sem2</td><td> Master of Technology (Geo-informatics and Surveying Technology)</td><td> 2021-23</td></tr>
                                                        <tr><td>6.</td><td> 21070146005</td><td> 2022-23</td><td> Debdarshi Das</td><td> PG Merit Sem2</td><td> Master of Technology (Geo-informatics and Surveying Technology)</td><td> 2021-23</td></tr>
                                                        <tr><td>7.</td><td> 21070146006</td><td> 2022-23</td><td> Rutuja Gorivale</td><td> PG Merit Sem2</td><td> Master of Technology (Geo-informatics and Surveying Technology)</td><td> 2021-23</td></tr>
                                                        <tr><td>8.</td><td> 21070146011</td><td> 2022-23</td><td> Shivani Bhatia</td><td> PG Merit Sem2</td><td> Master of Technology (Geo-informatics and Surveying Technology)</td><td> 2021-23</td></tr>
                                                        <tr><td>9.</td><td> 21070146005</td><td> 2022-23</td><td> Debdarshi Das</td><td> PG Merit Sem3</td><td> Master of Technology (Geo-informatics and Surveying Technology)</td><td> 2021-23</td></tr>
                                                        <tr><td>10.</td><td> 21070146011</td><td> 2022-23</td><td> Shivani Bhatia</td><td> PG Merit Sem3</td><td> Master of Technology (Geo-informatics and Surveying Technology)</td><td> 2021-23</td></tr>
                                                        <tr><td>11.</td><td> 21070146006</td><td> 2022-23</td><td> Rutuja Gorivale</td><td> PG Merit Sem3</td><td> Master of Technology (Geo-informatics and Surveying Technology)</td><td> 2021-23</td></tr>
                                                        <tr><td>12.</td><td> 21070146016</td><td> 2022-23</td><td> Bremkumar K</td><td> PG Merit Sem3</td><td> Master of Technology (Geo-informatics and Surveying Technology)</td><td> 2021-23</td></tr>
                                                        <tr><td>13.</td><td> 22070146012</td><td> 2022-23</td><td> Prathamesh Patil</td><td> PG Merit Sem1</td><td> Master of Technology (Geo-informatics and Surveying Technology)</td><td> 2022-24</td></tr>
                                                        <tr><td>14.</td><td> 22070146007</td><td> 2022-23</td><td> Suhel Naykwadi</td><td> PG Merit Sem1</td><td> Master of Technology (Geo-informatics and Surveying Technology)</td><td> 2022-24</td></tr>
                                                        <tr><td>15.</td><td> 22070146008</td><td> 2022-23</td><td> Poonam Reure</td><td> PG Merit Sem1</td><td> Master of Technology (Geo-informatics and Surveying Technology)</td><td> 2022-24</td></tr>
                                                        <tr><td>16.</td><td> 22070146004</td><td> 2022-23</td><td> Dohan Kanse</td><td> PG Merit Sem1</td><td> Master of Technology (Geo-informatics and Surveying Technology)</td><td> 2022-24</td></tr>
                                                        <tr><td>17.</td><td> 22070241016</td><td> 2022-23</td><td> Arenla Longchar</td><td>NER Scholarship- Semester 1 &amp; 2</td><td> Master of Science (Geoinformatics)</td><td> 2022-24</td></tr>

                                                        </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="batch-2021" role="tabpanel">
                                    <div class="program_structure_content">
                                        <div class="program_structure_listing">
                                            <h2 class="program_structure_heading">SIU PG Merit Scholarship 2021-2022</h2>
                                            <div class="table-responsive">
                                                <table class="table mb-0 fee_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>PRN</th>
                                                            <th>Financial Year</th>
                                                            <th>Name of the Student</th>
                                                            <th>Type of Scholarship</th>
                                                            <th>Programme Name</th>
                                                            <th>Batch</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                        <td>
                                                        <p>1.</p>
                                                        </td>
                                                        <td>
                                                        <p>19070241001</p>
                                                        </td>
                                                        <td>
                                                        <p>2021-22</p>
                                                        </td>
                                                        <td>
                                                        <p>A.Abhijeet</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem3</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2019-21</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>2.</p>
                                                        </td>
                                                        <td>
                                                        <p>20070241039</p>
                                                        </td>
                                                        <td>
                                                        <p>2021-22</p>
                                                        </td>
                                                        <td>
                                                        <p>Prabhu Sharvan Rajesh</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem1</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2020-22</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>3.</p>
                                                        </td>
                                                        <td>
                                                        <p>19070243015</p>
                                                        </td>
                                                        <td>
                                                        <p>2021-22</p>
                                                        </td>
                                                        <td>
                                                        <p>Shuvam Sanyal</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem3</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Data Science &amp; Spatial Analytics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2019-21</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>4.</p>
                                                        </td>
                                                        <td>
                                                        <p>20070243002</p>
                                                        </td>
                                                        <td>
                                                        <p>2021-22</p>
                                                        </td>
                                                        <td>
                                                        <p>Akshita Saxena</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem1</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Data Science &amp; Spatial Analytics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2020-22</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>5.</p>
                                                        </td>
                                                        <td>
                                                        <p>19070146007</p>
                                                        </td>
                                                        <td>
                                                        <p>2021-22</p>
                                                        </td>
                                                        <td>
                                                        <p>Pranav Pandey</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem 3</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Technology (Geo-informatics and Surveying Technology)</p>
                                                        </td>
                                                        <td>
                                                        <p>2019-21</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>6.</p>
                                                        </td>
                                                        <td>
                                                        <p>20070146006</p>
                                                        </td>
                                                        <td>
                                                        <p>2021-22</p>
                                                        </td>
                                                        <td>
                                                        <p>Priyanka More</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem 1</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Technology (Geo-informatics and Surveying Technology)</p>
                                                        </td>
                                                        <td>
                                                        <p>2020-22</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>7</p>
                                                        </td>
                                                        <td>
                                                        <p>20070241048</p>
                                                        </td>
                                                        <td>
                                                        <p>2021-22</p>
                                                        </td>
                                                        <td>
                                                        <p>Sadaf Khan</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem2</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2020-22</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>8</p>
                                                        </td>
                                                        <td>
                                                        <p>19070243015</p>
                                                        </td>
                                                        <td>
                                                        <p>2021-22</p>
                                                        </td>
                                                        <td>
                                                        <p>Shuvam Sanyal</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem4</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Data Science &amp; Spatial Analytics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2019-21</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>9</p>
                                                        </td>
                                                        <td>
                                                        <p>20070243021</p>
                                                        </td>
                                                        <td>
                                                        <p>2021-22</p>
                                                        </td>
                                                        <td>
                                                        <p>Sahil Purohit</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem2</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Data Science &amp; Spatial Analytics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2020-22</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>10</p>
                                                        </td>
                                                        <td>
                                                        <p>19070146007</p>
                                                        </td>
                                                        <td>
                                                        <p>2021-22</p>
                                                        </td>
                                                        <td>
                                                        <p>Pranav Pandey</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem 4</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Technology (Geo-informatics and Surveying Technology)</p>
                                                        </td>
                                                        <td>
                                                        <p>2019-21</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>11</p>
                                                        </td>
                                                        <td>
                                                        <p>20070146006</p>
                                                        </td>
                                                        <td>
                                                        <p>2021-22</p>
                                                        </td>
                                                        <td>
                                                        <p>Priyanka More</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem 2</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Technology (Geo-informatics and Surveying Technology)</p>
                                                        </td>
                                                        <td>
                                                        <p>2020-22</p>
                                                        </td>
                                                        </tr>
                                                        </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="batch-2020" role="tabpanel">
                                    <div class="program_structure_content">
                                        <div class="program_structure_listing">
                                            <h2 class="program_structure_heading">SIU PG Merit Scholarship 2020-2021</h2>
                                            <div class="table-responsive">
                                                <table class="table mb-0 fee_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>PRN</th>
                                                            <th>Financial Year</th>
                                                            <th>Name of the Student</th>
                                                            <th>Type of Scholarship</th>
                                                            <th>Programme Name</th>
                                                            <th>Batch</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                        <td>
                                                        <p>1.</p>
                                                        </td>
                                                        <td>
                                                        <p>19070241001</p>
                                                        </td>
                                                        <td>
                                                        <p>2020-21</p>
                                                        </td>
                                                        <td>
                                                        <p>A.Abhijeet</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem2</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2019-21</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>2.</p>
                                                        </td>
                                                        <td>
                                                        <p>19070241052</p>
                                                        </td>
                                                        <td>
                                                        <p>2020-21</p>
                                                        </td>
                                                        <td>
                                                        <p>Sumouli Basu</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem1</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2019-21</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>3.</p>
                                                        </td>
                                                        <td>
                                                        <p>18070241041</p>
                                                        </td>
                                                        <td>
                                                        <p>2020-21</p>
                                                        </td>
                                                        <td>
                                                        <p>Sharmistha Halder</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem4</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2018-20</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>4.</p>
                                                        </td>
                                                        <td>
                                                        <p>18070241046</p>
                                                        </td>
                                                        <td>
                                                        <p>2020-21</p>
                                                        </td>
                                                        <td>
                                                        <p>Soniya Srivastava</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem2</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2018-20</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>5.</p>
                                                        </td>
                                                        <td>
                                                        <p>18070241046</p>
                                                        </td>
                                                        <td>
                                                        <p>2020-21</p>
                                                        </td>
                                                        <td>
                                                        <p>Soniya Srivastava</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem3</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2018-20</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>6.</p>
                                                        </td>
                                                        <td>
                                                        <p>17070241008</p>
                                                        </td>
                                                        <td>
                                                        <p>2020-21</p>
                                                        </td>
                                                        <td>
                                                        <p>Asmita Mukherjee</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem4</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2017-19</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>7.</p>
                                                        </td>
                                                        <td>
                                                        <p>19070243008</p>
                                                        </td>
                                                        <td>
                                                        <p>2020-21</p>
                                                        </td>
                                                        <td>
                                                        <p>Goresh Sharma</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem1</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Data Science &amp; Spatial Analytics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2019-21</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>8.</p>
                                                        </td>
                                                        <td>
                                                        <p>19070243008</p>
                                                        </td>
                                                        <td>
                                                        <p>2020-21</p>
                                                        </td>
                                                        <td>
                                                        <p>Goresh Sharma</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem2</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Data Science &amp; Spatial Analytics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2019-21</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>9.</p>
                                                        </td>
                                                        <td>
                                                        <p>19070146007</p>
                                                        </td>
                                                        <td>
                                                        <p>2020-21</p>
                                                        </td>
                                                        <td>
                                                        <p>Pranav Pandya</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem1</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Technology (Geo-informatics and Surveying Technology)</p>
                                                        </td>
                                                        <td>
                                                        <p>2019-21</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>10.</p>
                                                        </td>
                                                        <td>
                                                        <p>19070146007</p>
                                                        </td>
                                                        <td>
                                                        <p>2020-21</p>
                                                        </td>
                                                        <td>
                                                        <p>Pranav Pandya</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem2</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Technology (Geo-informatics and Surveying Technology)</p>
                                                        </td>
                                                        <td>
                                                        <p>2019-21</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>11.</p>
                                                        </td>
                                                        <td>
                                                        <p>18070146005</p>
                                                        </td>
                                                        <td>
                                                        <p>2020-21</p>
                                                        </td>
                                                        <td>
                                                        <p>Pratik Mahadik</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem2</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Technology (Geo-informatics and Surveying Technology)</p>
                                                        </td>
                                                        <td>
                                                        <p>2018-20</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>12.</p>
                                                        </td>
                                                        <td>
                                                        <p>18070146005</p>
                                                        </td>
                                                        <td>
                                                        <p>2020-21</p>
                                                        </td>
                                                        <td>
                                                        <p>Pratik Mahadik</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem3</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Technology (Geo-informatics and Surveying Technology)</p>
                                                        </td>
                                                        <td>
                                                        <p>2018-20</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>13.</p>
                                                        </td>
                                                        <td>
                                                        <p>18070146005</p>
                                                        </td>
                                                        <td>
                                                        <p>2020-21</p>
                                                        </td>
                                                        <td>
                                                        <p>Pratik Mahadik</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem4</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Technology (Geo-informatics and Surveying Technology)</p>
                                                        </td>
                                                        <td>
                                                        <p>2018-20</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>14.</p>
                                                        </td>
                                                        <td>
                                                        <p>17070146001</p>
                                                        </td>
                                                        <td>
                                                        <p>2020-21</p>
                                                        </td>
                                                        <td>
                                                        <p>Ajay Bhandari</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem4</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Technology (Geo-informatics and Surveying Technology)</p>
                                                        </td>
                                                        <td>
                                                        <p>2017-19</p>
                                                        </td>
                                                        </tr>
                                                        </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="batch-2019" role="tabpanel">
                                    <div class="program_structure_content">
                                        <div class="program_structure_listing">
                                            <h2 class="program_structure_heading">SIU PG GIP Scholarship 2019-2020</h2>
                                            <div class="table-responsive">
                                                <table class="table mb-0 fee_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>PRN</th>
                                                            <th>Financial Year</th>
                                                            <th>Name of the Student</th>
                                                            <th>Type of Scholarship</th>
                                                            <th>Programme Name</th>
                                                            <th>Batch</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                        <td>
                                                        <p>1.</p>
                                                        </td>
                                                        <td>
                                                        <p>19070241032</p>
                                                        </td>
                                                        <td>
                                                        <p>2019-20</p>
                                                        </td>
                                                        <td>
                                                        <p>Pradnita Komal Henry</p>
                                                        </td>
                                                        <td>
                                                        <p>GIP</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2019-21</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>2.</p>
                                                        </td>
                                                        <td>
                                                        <p>19070241003</p>
                                                        </td>
                                                        <td>
                                                        <p>2019-20</p>
                                                        </td>
                                                        <td>
                                                        <p>Vaishnavi Adhav</p>
                                                        </td>
                                                        <td>
                                                        <p>GIP</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2019-21</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>3.</p>
                                                        </td>
                                                        <td>
                                                        <p>19070243015</p>
                                                        </td>
                                                        <td>
                                                        <p>2019-20</p>
                                                        </td>
                                                        <td>
                                                        <p>Shuvam Sanyal</p>
                                                        </td>
                                                        <td>
                                                        <p>GIP</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Data Science &amp; Spatial Analytics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2019-21</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>4.</p>
                                                        </td>
                                                        <td>
                                                        <p>19070241020</p>
                                                        </td>
                                                        <td>
                                                        <p>2019-20</p>
                                                        </td>
                                                        <td>
                                                        <p>Indraneel Kulkarni</p>
                                                        </td>
                                                        <td>
                                                        <p>GIP</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2019-21</p>
                                                        </td>
                                                        </tr>
                                                        </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="batch-2018" role="tabpanel">
                                    <div class="program_structure_content">
                                        <div class="program_structure_listing">
                                            <h2 class="program_structure_heading">SIU PG Merit Scholarship 2018-2019</h2>
                                            <div class="table-responsive">
                                                <table class="table mb-0 fee_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>PRN</th>
                                                            <th>Financial Year</th>
                                                            <th>Name of the Student</th>
                                                            <th>Type of Scholarship</th>
                                                            <th>Programme Name</th>
                                                            <th>Batch</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                        <td>
                                                        <p>1.</p>
                                                        </td>
                                                        <td>
                                                        <p>16070241017</p>
                                                        </td>
                                                        <td>
                                                        <p>2018-19</p>
                                                        </td>
                                                        <td>
                                                        <p>Emily Laskar</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem4</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2016-18</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>2.</p>
                                                        </td>
                                                        <td>
                                                        <p>17070241008</p>
                                                        </td>
                                                        <td>
                                                        <p>2018-19</p>
                                                        </td>
                                                        <td>
                                                        <p>Asmita Mukherjee</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem2</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2017-19</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>3.</p>
                                                        </td>
                                                        <td>
                                                        <p>17070146005</p>
                                                        </td>
                                                        <td>
                                                        <p>2018-19</p>
                                                        </td>
                                                        <td>
                                                        <p>Aishwarya Ingle</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem2</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Technology (Geo-informatics and Surveying Technology)</p>
                                                        </td>
                                                        <td>
                                                        <p>2017-19</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>4.</p>
                                                        </td>
                                                        <td>
                                                        <p>17070146004</p>
                                                        </td>
                                                        <td>
                                                        <p>2018-19</p>
                                                        </td>
                                                        <td>
                                                        <p>Darshan Shylesh&nbsp;</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem2</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Technology (Geo-informatics and Surveying Technology)</p>
                                                        </td>
                                                        <td>
                                                        <p>2017-19</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>5.</p>
                                                        </td>
                                                        <td>
                                                        <p>17070241059</p>
                                                        </td>
                                                        <td>
                                                        <p>2018-19</p>
                                                        </td>
                                                        <td>
                                                        <p>Ushashi Podder</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem3</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2016-18</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>6.</p>
                                                        </td>
                                                        <td>
                                                        <p>18070241009</p>
                                                        </td>
                                                        <td>
                                                        <p>2018-19</p>
                                                        </td>
                                                        <td>
                                                        <p>Atrayee Roy&nbsp;</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem1</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2018-20</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>7.</p>
                                                        </td>
                                                        <td>
                                                        <p>17070146001</p>
                                                        </td>
                                                        <td>
                                                        <p>2018-19</p>
                                                        </td>
                                                        <td>
                                                        <p>Ajay Bhandari&nbsp;</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem3</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Technology (Geo-informatics and Surveying Technology)</p>
                                                        </td>
                                                        <td>
                                                        <p>2017-19</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>8.</p>
                                                        </td>
                                                        <td>
                                                        <p>18070146010</p>
                                                        </td>
                                                        <td>
                                                        <p>2018-19</p>
                                                        </td>
                                                        <td>
                                                        <p>Abhijeet Sharma</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem1</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Technology (Geo-informatics and Surveying Technology)</p>
                                                        </td>
                                                        <td>
                                                        <p>2018-20</p>
                                                        </td>
                                                        </tr>
                                                        </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="batch-2017" role="tabpanel">
                                    <div class="program_structure_content">
                                        <div class="program_structure_listing">
                                            <h2 class="program_structure_heading">SIU PG Merit Scholarship 2017-18</h2>
                                            <div class="table-responsive">
                                                <table class="table mb-0 fee_table">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr. No.</th>
                                                            <th>PRN</th>
                                                            <th>Financial Year</th>
                                                            <th>Name of the Student</th>
                                                            <th>Type of Scholarship</th>
                                                            <th>Programme Name</th>
                                                            <th>Batch</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                        <td>
                                                        <p>1</p>
                                                        </td>
                                                        <td>
                                                        <p>17070241008</p>
                                                        </td>
                                                        <td>
                                                        <p>2017-18</p>
                                                        </td>
                                                        <td>
                                                        <p>Asmita Mukherjee</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem1</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2017-19</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>2</p>
                                                        </td>
                                                        <td>
                                                        <p>17070146005</p>
                                                        </td>
                                                        <td>
                                                        <p>2017-18</p>
                                                        </td>
                                                        <td>
                                                        <p>Aishwarya Ingle</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem1</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Technology (Geo-informatics and Surveying Technology)</p>
                                                        </td>
                                                        <td>
                                                        <p>2017-19</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>3</p>
                                                        </td>
                                                        <td>
                                                        <p>15070241029</p>
                                                        </td>
                                                        <td>
                                                        <p>2017-18</p>
                                                        </td>
                                                        <td>
                                                        <p>Priyanka Ghosh</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem3</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2015-17</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>4</p>
                                                        </td>
                                                        <td>
                                                        <p>16070241017</p>
                                                        </td>
                                                        <td>
                                                        <p>2017-18</p>
                                                        </td>
                                                        <td>
                                                        <p>Emily Laskar</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem1</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2016-18</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>5</p>
                                                        </td>
                                                        <td>
                                                        <p>16070241045</p>
                                                        </td>
                                                        <td>
                                                        <p>2017-18</p>
                                                        </td>
                                                        <td>
                                                        <p>Rache Dapbiang Lyngdoh</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem1</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2016-18</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>6</p>
                                                        </td>
                                                        <td>
                                                        <p>16070241037</p>
                                                        </td>
                                                        <td>
                                                        <p>2017-18</p>
                                                        </td>
                                                        <td>
                                                        <p>Palmu Bhutia</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem1</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2016-18</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>7</p>
                                                        </td>
                                                        <td>
                                                        <p>16070241026</p>
                                                        </td>
                                                        <td>
                                                        <p>2017-18</p>
                                                        </td>
                                                        <td>
                                                        <p>Madhurjya Madhab Dutta</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem1</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2016-18</p>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <td>
                                                        <p>8</p>
                                                        </td>
                                                        <td>
                                                        <p>16070241047</p>
                                                        </td>
                                                        <td>
                                                        <p>2017-18</p>
                                                        </td>
                                                        <td>
                                                        <p>Raborlang Samiam&nbsp;</p>
                                                        </td>
                                                        <td>
                                                        <p>PG Merit Sem1</p>
                                                        </td>
                                                        <td>
                                                        <p>Master of Science (Geoinformatics)</p>
                                                        </td>
                                                        <td>
                                                        <p>2016-18</p>
                                                        </td>
                                                        </tr>
                                                        </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection