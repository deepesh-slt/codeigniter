<?php
    class tcpdf_controller extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->helper('pdf');
        }

        public function index(){
            tcpdf();
            $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
            $obj_pdf->SetCreator(PDF_CREATOR);
            $title = "PDF Report";
            $obj_pdf->SetTitle($title);
            $obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
            $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
            $obj_pdf->SetDefaultMonospacedFont('helvetica');
            $obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
            $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
            $obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
            $obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
            $obj_pdf->SetFont('helvetica', '', 9);
            $obj_pdf->setFontSubsetting(false);
            $obj_pdf->AddPage();
            ob_start();
                // we can have any view part here like HTML, PHP etc
                $content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro incidunt mollitia amet ex. Expedita assumenda illo esse? Illo reprehenderit ratione, et enim magni consectetur non ipsa esse assumenda iste vel rerum modi nemo debitis magnam repudiandae, soluta quis, nihil quas placeat quasi? Quibusdam at soluta unde quisquam distinctio. Vitae molestiae quod eum laborum eaque magni placeat unde rerum amet quae, ab distinctio adipisci laudantium veritatis error quisquam architecto? Culpa, magnam quasi dicta pariatur voluptatum maiores voluptate atque. Consequatur repellat libero exercitationem quis ab. Maiores perspiciatis numquam repellat debitis quod eligendi architecto! Veniam totam sed minima in! Aliquid, odio ad corrupti minima provident amet cupiditate sed maxime minus aperiam id nesciunt totam rem, blanditiis quod, laborum velit. Eum minus mollitia modi quae dolores a aliquam, neque nostrum ut dolorem suscipit dicta quod expedita dolor aut, quos ipsum iusto consequatur. Ipsam animi corrupti repudiandae eligendi maiores minus incidunt officiis vitae officia et dolore dolor sequi veritatis magnam quibusdam natus, eveniet, in necessitatibus libero dicta? Tenetur repellendus ratione temporibus odit fugit, vitae ipsa magnam aut sapiente recusandae? Consequuntur exercitationem unde quam incidunt voluptatem porro officiis veritatis et sed, assumenda dignissimos vero nihil dolores officia animi nisi cumque cupiditate iste doloremque. Sint recusandae eaque in eos provident atque necessitatibus laboriosam, dolor voluptatem vitae? Placeat accusantium consequatur, cumque quo impedit nobis fugiat maxime. Dolorum nemo nesciunt, saepe officiis iste excepturi dicta deleniti, temporibus, velit est at. Dicta porro consectetur odit assumenda exercitationem. Voluptate ut vero iste similique culpa mollitia? Maxime, nulla molestiae animi, quidem libero voluptas exercitationem atque laudantium impedit nisi ipsam placeat ratione quo obcaecati id optio adipisci tempora dolore. Ratione pariatur beatae vitae, dolor atque sunt excepturi ea. Quas iusto modi sequi dolorem atque laboriosam minus qui saepe totam in. Commodi rerum sunt voluptatum consequatur adipisci temporibus id alias. Molestiae eligendi sint cupiditate eaque impedit, sunt omnis itaque fugiat qui? Dolores pariatur debitis rerum consequatur voluptates? Aperiam voluptatem praesentium ipsam sit inventore! Facere at maxime corporis nam a fuga nostrum nesciunt minima ratione odit incidunt, nihil, eveniet laudantium. Aliquid nemo porro aliquam consequuntur, distinctio accusamus? Quos, accusantium! Facere odio dolorum doloribus quibusdam odit in, culpa voluptas nostrum quod quidem sed fuga quae totam. Voluptatum ipsa, temporibus iste ipsum nemo doloremque necessitatibus, impedit iure cumque debitis itaque laborum enim consectetur, a accusantium error consequatur. Ea expedita obcaecati fuga a omnis! Ut possimus odit doloremque doloribus consequatur voluptates dignissimos hic, earum architecto quod aperiam ex deleniti temporibus sapiente distinctio in similique. Nostrum, eaque rem, debitis quis cumque ratione velit quae labore voluptate nihil praesentium! Nesciunt voluptatibus distinctio iusto laboriosam fugiat, ea dolorem rem excepturi repudiandae quasi hic reiciendis ad ut doloremque illo nostrum veritatis earum esse soluta voluptatum. Velit voluptatem voluptate dicta soluta perspiciatis quas vero dolor, blanditiis nisi temporibus, et quibusdam aliquid cum, molestias voluptatum architecto praesentium ipsum. Dicta nostrum quos nobis laboriosam totam aut magni illo adipisci consectetur eligendi. Ex quasi officiis excepturi quisquam dolore quam rerum, ipsum quos ipsa perferendis. Officia aliquid numquam quo dolorem deleniti, facilis nostrum debitis in magni quae, quod laudantium error quam dolores ratione illo fugit delectus ea suscipit fugiat, neque non sit consectetur. Sequi, molestiae sit. Nostrum, itaque molestiae. Maiores aperiam officiis at ullam possimus iste expedita a accusamus molestias, accusantium perspiciatis doloribus. Hic reiciendis dolore deleniti assumenda, doloremque inventore eveniet veritatis nisi autem similique, doloribus ad ex rerum error explicabo sed voluptatibus. Commodi dignissimos voluptatem accusantium, aspernatur obcaecati temporibus, quas delectus, aliquam atque fugiat quisquam quae doloribus molestiae omnis magnam vero eos sequi vitae minima reprehenderit. Adipisci necessitatibus assumenda incidunt itaque eum dolorum? Maxime perspiciatis voluptates similique ullam ut repellendus! Corrupti dolorem consectetur tenetur cupiditate aspernatur magni aliquid ex, voluptates autem facilis consequuntur impedit, explicabo iure error officia quam illum voluptas sapiente omnis eveniet repellendus. At totam delectus facere recusandae vitae repellendus neque similique eaque impedit asperiores consequuntur quia, ipsa sint dolor voluptatum. Ut eum itaque eaque tempore deleniti nam autem nostrum excepturi doloremque, numquam atque odit beatae consequuntur ea quaerat accusantium esse! Ipsa assumenda quod quo atque dolorum sapiente illo voluptate ea dolor hic voluptates ut aut quibusdam doloremque qui voluptas laborum, dolore cupiditate praesentium delectus molestias? Aut sunt maiores, numquam tempora rerum at quis velit obcaecati in exercitationem voluptatibus similique. Hic laborum minus est, ullam voluptates nihil mollitia dolorem, eum animi, consectetur quae blanditiis possimus distinctio aliquid impedit iure doloribus odio rem nisi vitae! Unde officia numquam reprehenderit iure? Voluptatum architecto veniam repudiandae ipsa dolore atque vero nostrum illo aut voluptate, culpa nesciunt, pariatur saepe modi id deserunt facere sed non ducimus, earum enim ut natus porro tempore. Eligendi eos sapiente maiores hic molestias, quia, dolor voluptate doloremque totam aut vero animi quas dolorum. Ipsa doloremque a vitae nam veritatis culpa, mollitia, corporis quas error magni ipsam quaerat porro, consequatur aliquid amet dicta eaque. Assumenda possimus obcaecati architecto officiis provident reiciendis ipsam recusandae! Maiores dolor aperiam ut. Aliquid minima quos perferendis molestiae facilis, ab, incidunt autem asperiores laborum ut modi voluptates accusamus ipsum praesentium officiis quod laboriosam sint. Ab minus sunt aliquid pariatur reiciendis odio optio inventore! Maxime distinctio dolor labore id minus incidunt eligendi sed a officiis, saepe eveniet nulla ad enim excepturi illum fuga! Quae voluptatibus, modi dolorem numquam voluptatem nulla sequi minus aspernatur consequuntur vero esse nisi veritatis. A vero aut praesentium dolores ipsam iure quam iusto laboriosam non in officia facilis, vel similique cumque, consectetur minima commodi excepturi dolorum vitae maiores veniam. Tempore, maiores eligendi labore eius commodi quibusdam ratione, nihil fuga consectetur temporibus quaerat sint accusantium recusandae atque in dolores tenetur impedit! Laborum earum modi veniam soluta non est recusandae? Saepe debitis praesentium minima suscipit repellat nostrum quia fugiat laborum molestias doloremque, eaque commodi voluptate porro maxime optio eos perferendis magnam! Ex quia aut doloremque laboriosam facere veniam consectetur, voluptatem enim consequatur temporibus voluptates ea quibusdam quae minima molestiae delectus doloribus cumque officia? Iusto voluptatum reiciendis, esse voluptates explicabo earum expedita voluptatem, harum fuga inventore, blanditiis nesciunt quas dicta nam obcaecati consectetur. Ab, eveniet illo! Atque natus vel voluptas esse suscipit, unde aliquam ipsum maiores nobis adipisci autem magni!Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro incidunt mollitia amet ex. Expedita assumenda illo esse? Illo reprehenderit ratione, et enim magni consectetur non ipsa esse assumenda iste vel rerum modi nemo debitis magnam repudiandae, soluta quis, nihil quas placeat quasi? Quibusdam at soluta unde quisquam distinctio. Vitae molestiae quod eum laborum eaque magni placeat unde rerum amet quae, ab distinctio adipisci laudantium veritatis error quisquam architecto? Culpa, magnam quasi dicta pariatur voluptatum maiores voluptate atque. Consequatur repellat libero exercitationem quis ab. Maiores perspiciatis numquam repellat debitis quod eligendi architecto! Veniam totam sed minima in! Aliquid, odio ad corrupti minima provident amet cupiditate sed maxime minus aperiam id nesciunt totam rem, blanditiis quod, laborum velit. Eum minus mollitia modi quae dolores a aliquam, neque nostrum ut dolorem suscipit dicta quod expedita dolor aut, quos ipsum iusto consequatur. Ipsam animi corrupti repudiandae eligendi maiores minus incidunt officiis vitae officia et dolore dolor sequi veritatis magnam quibusdam natus, eveniet, in necessitatibus libero dicta? Tenetur repellendus ratione temporibus odit fugit, vitae ipsa magnam aut sapiente recusandae? Consequuntur exercitationem unde quam incidunt voluptatem porro officiis veritatis et sed, assumenda dignissimos vero nihil dolores officia animi nisi cumque cupiditate iste doloremque. Sint recusandae eaque in eos provident atque necessitatibus laboriosam, dolor voluptatem vitae? Placeat accusantium consequatur, cumque quo impedit nobis fugiat maxime. Dolorum nemo nesciunt, saepe officiis iste excepturi dicta deleniti, temporibus, velit est at. Dicta porro consectetur odit assumenda exercitationem. Voluptate ut vero iste similique culpa mollitia? Maxime, nulla molestiae animi, quidem libero voluptas exercitationem atque laudantium impedit nisi ipsam placeat ratione quo obcaecati id optio adipisci tempora dolore. Ratione pariatur beatae vitae, dolor atque sunt excepturi ea. Quas iusto modi sequi dolorem atque laboriosam minus qui saepe totam in. Commodi rerum sunt voluptatum consequatur adipisci temporibus id alias. Molestiae eligendi sint cupiditate eaque impedit, sunt omnis itaque fugiat qui? Dolores pariatur debitis rerum consequatur voluptates? Aperiam voluptatem praesentium ipsam sit inventore! Facere at maxime corporis nam a fuga nostrum nesciunt minima ratione odit incidunt, nihil, eveniet laudantium. Aliquid nemo porro aliquam consequuntur, distinctio accusamus? Quos, accusantium! Facere odio dolorum doloribus quibusdam odit in, culpa voluptas nostrum quod quidem sed fuga quae totam. Voluptatum ipsa, temporibus iste ipsum nemo doloremque necessitatibus, impedit iure cumque debitis itaque laborum enim consectetur, a accusantium error consequatur. Ea expedita obcaecati fuga a omnis! Ut possimus odit doloremque doloribus consequatur voluptates dignissimos hic, earum architecto quod aperiam ex deleniti temporibus sapiente distinctio in similique. Nostrum, eaque rem, debitis quis cumque ratione velit quae labore voluptate nihil praesentium! Nesciunt voluptatibus distinctio iusto laboriosam fugiat, ea dolorem rem excepturi repudiandae quasi hic reiciendis ad ut doloremque illo nostrum veritatis earum esse soluta voluptatum. Velit voluptatem voluptate dicta soluta perspiciatis quas vero dolor, blanditiis nisi temporibus, et quibusdam aliquid cum, molestias voluptatum architecto praesentium ipsum. Dicta nostrum quos nobis laboriosam totam aut magni illo adipisci consectetur eligendi. Ex quasi officiis excepturi quisquam dolore quam rerum, ipsum quos ipsa perferendis. Officia aliquid numquam quo dolorem deleniti, facilis nostrum debitis in magni quae, quod laudantium error quam dolores ratione illo fugit delectus ea suscipit fugiat, neque non sit consectetur. Sequi, molestiae sit. Nostrum, itaque molestiae. Maiores aperiam officiis at ullam possimus iste expedita a accusamus molestias, accusantium perspiciatis doloribus. Hic reiciendis dolore deleniti assumenda, doloremque inventore eveniet veritatis nisi autem similique, doloribus ad ex rerum error explicabo sed voluptatibus. Commodi dignissimos voluptatem accusantium, aspernatur obcaecati temporibus, quas delectus, aliquam atque fugiat quisquam quae doloribus molestiae omnis magnam vero eos sequi vitae minima reprehenderit. Adipisci necessitatibus assumenda incidunt itaque eum dolorum? Maxime perspiciatis voluptates similique ullam ut repellendus! Corrupti dolorem consectetur tenetur cupiditate aspernatur magni aliquid ex, voluptates autem facilis consequuntur impedit, explicabo iure error officia quam illum voluptas sapiente omnis eveniet repellendus. At totam delectus facere recusandae vitae repellendus neque similique eaque impedit asperiores consequuntur quia, ipsa sint dolor voluptatum. Ut eum itaque eaque tempore deleniti nam autem nostrum excepturi doloremque, numquam atque odit beatae consequuntur ea quaerat accusantium esse!';
            ob_end_clean();
            $obj_pdf->writeHTML($content, true, false, true, false, '');
            $obj_pdf->Output('output.pdf', 'I');
        }
    }