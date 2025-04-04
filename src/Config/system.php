<?php

return [
    [
        'key'    => 'sales.payment_methods.paytm',
        'name'   => 'Paytm',
       'info' => 'Paytm extension created for Bagisto by <a href="https://www.vfixtechnology.com" target="_blank" style="color: blue;">Vfix Technology</a>.',
        'sort'   => 8,
        'fields' => [
            [
                'name'          => 'title',
                'title'         => 'title',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
            ], [
                'name'          => 'description',
                'title'         => 'description',
                'type'          => 'textarea',
                'channel_based' => false,
                'locale_based'  => true,
            ],
            [
                'name'          => 'image',
                'title'         => 'Logo',
                'type'          => 'image',
                'channel_based' => false,
                'locale_based'  => false,
                'validation'    => 'mimes:bmp,jpeg,jpg,png,webp',
            ],
			[
                'name'          => 'merchant_id',
                'title'         => 'Merchant Id',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
            ],
			[
                'name'          => 'merchant_key',
                'title'         => 'Merchant Key',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
            ],
			[
                'name'    => 'website',
                'title'   => 'Website Status',
                'type'    => 'select',
                'validation'    => 'required',
                'options' => [
                    [
                        'title' => 'Staging',
                        'value' => 'WEBSTAGING',
                    ], [
                        'title' => 'Live',
                        'value' => 'DEFAULT',
                    ],
                ],
            ],
			[
                'name'          => 'active',
                'title'         => 'admin::app.configuration.index.sales.payment-methods.status',
                'type'          => 'boolean',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true
            ],

        ]
    ]
];