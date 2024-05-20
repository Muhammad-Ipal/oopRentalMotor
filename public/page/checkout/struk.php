<section>
  <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
    <div class="max-w-3xl mx-auto">
      <div class="mt-16">
        <div class="flex flex-col items-center justify-between pb-5 border-b border-gray-200 sm:justify-between md:flex-row">
          <div>
            <img src="<?= $transaction->img ?>" alt="" class="h-40 mx-auto mb-7 md:mb-0">
          </div>
          <div class="overflow-x-auto">
            <table class="w-full sm:max-w-[400px] table-fixed  text-sm">
              <tr>
                <td class="px-4 py-2 font-semibold whitespace-nowrap text-slate-900">Brand</td>
                <td class="px-4 py-2 whitespace-nowrap text-slate-700"><?= $transaction->brand ?></td>
              </tr>
              <tr>
                <td class="px-4 py-2 font-semibold whitespace-nowrap text-slate-900">Type</td>
                <td class="px-4 py-2 whitespace-nowrap text-slate-700"><?= $transaction->type ?></td>
              </tr>
              <tr>
                <td class="px-4 py-2 font-semibold whitespace-nowrap text-slate-900">CC</td>
                <td class="px-4 py-2 whitespace-nowrap text-slate-700"><?= $transaction->cc ?></td>
              </tr>
              <tr>
                <td class="px-4 py-2 font-semibold whitespace-nowrap text-slate-900">Color</td>
                <td class="px-4 py-2 whitespace-nowrap text-slate-700"><?= $transaction->color ?></td>
              </tr>
              <tr>
                <td class="px-4 py-2 font-semibold whitespace-nowrap text-slate-900">Daily Price</td>
                <td class="px-4 py-2 whitespace-nowrap text-slate-700">Rp. <?= number_format($transaction->daily_price) ?></td>
              </tr>
            </table>
          </div>
        </div>

        <table class="min-w-full mt-5 ">
          <tr>
            <td class="px-4 py-2 font-semibold whitespace-nowrap text-slate-900">Name</td>
            <td class="px-4 py-2 text-right whitespace-nowrap text-slate-700">
              <?= $date ?>
            </td>
          </tr>
          <tr>
            <td class="px-4 py-2 font-semibold whitespace-nowrap text-slate-900">Location</td>
            <td class="px-4 py-2 text-right whitespace-nowrap text-slate-700">
              <?= $location ?>
            </td>
          </tr>
          <tr>
            <td class="px-4 py-2 font-semibold whitespace-nowrap text-slate-900">Start From</td>
            <td class="px-4 py-2 text-right whitespace-nowrap text-slate-700">
              <?= $date ?>
            </td>
          </tr>
          <tr>
            <td class="px-4 py-2 font-semibold whitespace-nowrap text-slate-900">Duration (Day)</td>
            <td class="px-4 py-2 text-right whitespace-nowrap text-slate-700">
              <?= $day ?>
            </td>
          </tr>
          <tr>
            <td class="px-4 py-2 font-semibold whitespace-nowrap text-slate-900">Status</td>
            <td class="px-4 py-2 text-right whitespace-nowrap text-slate-700">
              <?php
              if (isset($_SESSION['login'])) {
                echo 'Member';
              } else {
                echo 'Non-Member';
              }
              ?>
            </td>
          </tr>
          <tr>
            <td class="px-4 py-2 font-semibold whitespace-nowrap text-slate-900">Discount</td>
            <td class="px-4 py-2 text-right whitespace-nowrap text-slate-700">
              <?php
              if (isset($_SESSION['login'])) {
                echo '-5%';
              } else {
                echo '0';
              }
              ?>
            </td>
          </tr>
          <tr>
            <td class="px-4 py-2 font-semibold whitespace-nowrap text-slate-900">Tax</td>
            <td class="px-4 py-2 text-right whitespace-nowrap text-slate-700">
              Rp. <?= number_format($transaction->tax) ?>
            </td>
          </tr>
          <tr>
            <td class="px-4 py-2 font-bold whitespace-nowrap text-slate-900">Total</td>
            <td class="px-4 py-2 text-right whitespace-nowrap text-slate-700">
              Rp. <?= number_format($transaction->Count()) ?>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</section>