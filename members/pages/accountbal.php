<div class="columns">
    <div class="column">
        <div class="notification-hide">{{notify}}</div>
    </div>
</div>
<div class="columns">
    <div class="column">
        <div class="box">
            <b>Cleared Balance:</b><br/>&nbsp;NGN {{balance.cleared_balance|currency:value=""}}
        </div>
        <div class="box">
            <b>Uncleared Balance:</b><br/>&nbsp;NGN {{balance.uncleared_balance|currency:value=""}}
        </div>
        <div class="box">
            <b>Book Balance:</b><br/>&nbsp;NGN {{balance.book_balance|currency:value=""}}
        </div>
        <div class="box">
            <b>Available Balance:</b><br/>&nbsp;NGN {{balance.available_balance|currency:value=""}}
        </div>
    </div>
</div>