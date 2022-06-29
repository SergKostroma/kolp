export class DetailModal {
    type = 'pc';
    productId;
    modal;
    htmlContent;

    constructor(productId, modal) {
        this.productId = productId;
        this.modal = modal;
        this.checkType();
        this.content().then((r) => {
            this.show()
        });

        if (this.type != 'pc') {
            this.goToCart();
        }
    }

    show() {
        this.modal.html(this.htmlContent);

        if (this.type == 'pc') {
            this.modal.modal('show');
        } else {
            this.modal.addClass('product-info-mobile--shown');
        }
    }

    checkType() {
        this.type = this.modal.hasClass('product-info-modal') ? 'pc' : 'mobile';
    }

    goToCart() {
        const $this = this;
       this.modal.on('click', '.js-open-basket', function () {
           $this.modal.removeClass('product-info-mobile--shown');
            $('.side-basket-cosen').css('display', 'block');
            $('.side-basket-cosen').css('left', '0');
            $('.side-basket-cosen').css('width', '100%');
        })
    }

    async content() {
        const $this = this;
        return await $.ajax({
            url: '/ajax.php',
            dataType: 'json',
            type: 'POST',
            data: {
                'action': 'productDetail',
                'data': {'id': this.productId, 'type': this.type},
            },
            error: function (data) {
                console.log(data);
            },
        }).done(function (data) {
            $this.htmlContent = data;
        });
    }
}