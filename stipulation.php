<?php 

$js_array= ['js/member.js'];

$g_title='約款';
$menu_code = 'member';

include 'inc_header.php';

?>

        <main>
            <h1 class="text-center mt-5">会員規約及び個人情報取扱方針同意</h1>
            <h4>会員規約</h4>
            <textarea name="" id="" cols="30" rows="10" class="form-control">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi, voluptatum doloremque asperiores pariatur voluptates ea nesciunt sapiente, provident cum ullam minima consequatur tempore vitae. Quae sit vitae dignissimos a reiciendis dolorum velit dicta, commodi laudantium. Assumenda blanditiis, alias repellendus nostrum similique consequuntur vel repudiandae explicabo voluptas libero quae tenetur nam officia autem, quidem, aperiam facilis itaque. Aliquam, voluptas illum tenetur, non doloremque dignissimos aperiam incidunt optio a rem quidem fuga maxime. Rerum delectus sed quas beatae? Voluptatem ab amet consectetur quasi maiores id ex illo aperiam magni, aliquid cumque nesciunt commodi exercitationem eius perspiciatis vero velit qui iusto sint obcaecati quas inventore maxime laudantium? Similique, ipsa amet voluptatibus sed repellendus mollitia natus nulla suscipit et ipsam perferendis placeat officia. Voluptatem sit aliquam voluptatum optio eius minus quibusdam commodi ipsum quos sint aliquid, nostrum nobis dicta eaque? Odit vitae officiis esse? Odio architecto vero doloribus tempora iure quidem accusamus reiciendis? Veniam dolores esse distinctio. Nam nisi excepturi numquam minus rem! Numquam autem sint sunt voluptatem error ex quam quis, repellendus earum optio omnis harum maiores in eaque. Totam labore non quasi quod nisi eveniet enim ut incidunt ipsum doloribus! Expedita enim deserunt rem fugiat asperiores exercitationem doloribus, tenetur minus officia architecto, fugit accusamus sed temporibus, itaque quibusdam qui natus totam sapiente velit consequuntur eum quidem? Vel at veniam ut praesentium, ducimus recusandae dolores laboriosam quo facere delectus consequatur dolorum quae voluptas aliquam eius illo ad quam maxime totam ratione magni. Sapiente, quis facere ad provident assumenda veritatis sequi qui illum sunt esse voluptas tempora! Architecto rem sint, sequi magnam perferendis incidunt neque eaque laudantium modi, molestiae praesentium vitae id voluptatum ex numquam? Alias sit in fugit iusto fuga id facere. Assumenda qui modi vero aperiam explicabo ducimus minus hic repellat in quasi recusandae molestias debitis, tempore laborum cum harum ratione molestiae!
            </textarea>
            <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" value="1" id="chk_member1">
                <label class="form-check-label" for="chk_member1">
                上記の約款に同意しますか？
                </label>
              </div>

       <h4 class="mt-3">会員情報取扱方針</h4>
       <textarea name="" id="" cols="30" rows="10" class="form-control">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nulla, accusamus mollitia temporibus voluptatum corporis officiis quod expedita fugit dolores, qui ea. Quaerat explicabo dolorem rerum neque voluptatem nam, omnis ut iure rem sequi accusantium incidunt veritatis maiores distinctio enim eligendi, officia sint assumenda earum beatae porro quas sunt voluptas iusto. Harum ratione aliquid, maiores consectetur quam nam placeat architecto culpa dolor commodi a vitae necessitatibus iste suscipit. Qui deserunt veniam voluptatem corporis at omnis officiis fuga eaque explicabo eum dicta labore quasi laudantium ab velit cum, iste, tempora excepturi dignissimos ullam ducimus! Recusandae minima id itaque dignissimos facilis perspiciatis nobis dolorum quam hic alias libero ex consectetur temporibus suscipit nihil modi a nam aspernatur eius, ab provident. Consectetur praesentium, assumenda quos tempore soluta cum officiis laudantium omnis reprehenderit excepturi inventore architecto iste, dicta repellendus iusto? Incidunt est molestiae quasi dicta perferendis culpa libero laudantium quaerat, aperiam dolorum illo officiis consectetur quia aliquid nihil vero! Cumque harum molestias natus voluptatem ut quasi quis tempora dicta. Itaque voluptates tempore esse pariatur laudantium enim accusantium, repellat dolor, saepe mollitia explicabo iure quidem illo minima! Animi, accusantium dicta aut suscipit ipsa recusandae inventore nisi totam, maxime in, ab debitis odio vero quia autem sequi. Earum perferendis, exercitationem ab dolores fugit architecto porro fuga, in aperiam quos iure dolor voluptatibus sint vero nemo? Officiis ex quis itaque similique eveniet unde ad error in, voluptate delectus consequuntur a praesentium placeat culpa nesciunt? Laudantium aliquid hic facilis placeat repellat deserunt, soluta veritatis natus! Ipsum, reprehenderit. Delectus fugiat facere adipisci necessitatibus, minima quae quaerat laborum, voluptate similique dolores numquam corporis voluptatibus sequi labore eligendi velit soluta quis dolorum. Quis eos facere enim voluptates beatae aliquam libero temporibus! Non blanditiis quas in animi earum cupiditate dicta reiciendis voluptate, architecto consequatur enim tempore at temporibus, necessitatibus nihil tempora qui!
       </textarea>
       <div class="form-check mt-2">
        <input class="form-check-input" type="checkbox" value="1" id="chk_member2">
        <label class="form-check-label" for="chk_member2">
            上記の個人情報取り扱い方針に同意しますか？
        </label>
      </div>

      <div class="mt-4 d-flex justify-content-center gap-2">
        <button class="btn btn-primary w-50" id="btn_member">会員登録</button>
        <button class="btn-secondary w-50">キャンセル</button>
      </div>

      <form method="post" name="stipulation_form" action="member_input.php" style="display: none">
        <input type="hidden" name="chk" value="0">
      </form>

     </main>

     <?php include 'inc_footer.php';?>