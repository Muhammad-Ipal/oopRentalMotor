<section>
  <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
    <div class="max-w-3xl mx-auto">
      <header class="text-center font-teko">
        <h1 class="text-xl font-bold text-gray-900 sm:text-3xl">Checkout</h1>
      </header>

      <div class="mt-16">
        <div class="flex flex-col justify-center pb-5 border-b border-gray-200 sm:justify-between md:flex-row">
          <div>
            <img src="<?= $transaction->img ?>" alt="" class="h-40 mx-auto mb-7 md:mb-0">
          </div>
          <div class="overflow-x-auto">
            <table class=" sm:max-w-[400px] table-fixed w-full text-sm">
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

        <form action="" method="post">
          <table class="min-w-full">
            <tr>
              <td class="px-4 py-2 font-semibold whitespace-nowrap text-slate-900">Name</td>
              <td class="px-4 py-2 text-right whitespace-nowrap text-slate-700">
                <input type="text" value="<?= isset($_SESSION['username']) ?  $_SESSION['username'] : '' ?>" class="w-full px-2 py-1 border border-gray-200 rounded-md" name="name">
              </td>
            </tr>
            <tr>
              <td class="px-4 py-2 font-semibold whitespace-nowrap text-slate-900">Location</td>
              <td class="px-4 py-2 text-right whitespace-nowrap text-slate-700">
                <select class="w-full px-2 py-1 border border-gray-200 rounded-md" name="location">
                  <option value="My location">Send to my location</option>
                </select>
              </td>
            </tr>
            <tr>
              <td class="px-4 py-2 font-semibold whitespace-nowrap text-slate-900">Start From</td>
              <td class="px-4 py-2 text-right whitespace-nowrap text-slate-700">
                <input type="date" class="w-full px-2 py-1 border border-gray-200 rounded-md" name="date">
              </td>
            </tr>
            <tr>
              <td class="px-4 py-2 font-semibold whitespace-nowrap text-slate-900">Duration (Day)</td>
              <td class="py-2 pl-4 text-right whitespace-nowrap text-slate-700">
                <div class="flex items-center justify-end">
                  <button type="button" onclick="decrement()" class="leading-10 text-gray-600 transition size-10 hover:opacity-75">
                    &minus;
                  </button>

                  <input type="number" name="day" id="Quantity" class="h-10 w-16 rounded border-gray-200 text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none" value="0" />

                  <button type="button" onclick="increment()" class="leading-10 text-gray-600 transition size-10 hover:opacity-75">
                    &plus;
                  </button>
                </div>

                <script>
                  function increment() {
                    var input = document.getElementById('Quantity');
                    input.stepUp();
                  }

                  function decrement() {
                    var input = document.getElementById('Quantity');
                    input.stepDown();
                  }
                </script>
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
               Rp.  <?= number_format($transaction->tax) ?>
              </td>
            </tr>
          </table>
          <div class="flex justify-end mt-5 mr-4 ">
            <button type="submit" name="checkout" class="px-5 py-3 font-semibold text-white rounded-md hover:bg-purple-500 bg-purpleColor">
              Checkout
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>