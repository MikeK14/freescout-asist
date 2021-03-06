<?php

return [
  'accepted'        => ':attribute باید تایید شود.',
  'active_url'      => ':attribute تاریخ باید بعد از :date باشد',
  'after'           => ':attribute تاریخ باید بعد از :date باشد',
  'after_or_equal'  => ':attribute تاریخ باید بعد یا مساوی با :date باشد.',
  'alpha'           => ':attribute فقط حروف مجاز است.',
  'alpha_dash'      => ':attribute فقط حروف ، اعداد ، خط تیره مانند - و _ مجاز است',
  'alpha_num'       => ':attribute فقط حروف و اعداد مجاز است..',
  'array'           => ':attribute فقط آرایه مجاز است.',
  'before'          => ':attribute باید تاریخ قبل از :date باشد.',
  'before_or_equal' => ':attribute باید تاریخ قبل یا مساوی با :date باشد',
  'between' => [
      'numeric'     => ':attribute باید مابین  :min و :max باشد',
      'file'        => ':attribute باید مابین :min و :max کیلوبایت باشد.',
      'string'      => ':attribute باید مابین :min و :max کاراکتر باشد.',
      'array'       => ':attribute باید مابین :min و :max آیتم باشد.',
  ],
  'boolean'        => ':attribute فیلد باید true یا false باشد.',
  'confirmed'      => ':attribute فیلد تایید یکسان نیست.',
  'date'           => ':attribute تاریخ معتبر وارد نشده است.',
  'date_format'    => ':attribute فرمت باید به شکل :format وارد شود',
  'different'      => 'مقدار :attribute و :other باید متفاوت باشند.',
  'digits'         => ':attribute باید :digits رقم باشد.',
  'digits_between' => ':attribute باید مابین :min و :max رقم باشد.',
  'dimensions'     => ':attribute طول و عرض تصویر معتبر نیست.',
  'distinct'       => ':attribute دارای مقدار تکراری است.',
  'email'          => ':attribute ایمیل آدرس معتبر نیست.',
  'exists'         => ':attribute مورد انتخاب شده معتبر نیست.',
  'file'           => ':attribute باید یک فایل انتخاب شود.',
  'filled'         => ':attribute باید یک مقدار وارد شود.',
  'image'          => ':attribute باید یک تصویر انتخاب شود.',
  'in'             => ':attribute معتبر نیست.',
  'in_array'       => ':attribute فیلد در :other موجود نیست',
  'integer'        => ':attribute باید عدد وارد شود.',
  'ip'             => ':attribute باید IP آدرس معتبر وارد شود.',
  'ipv4'           => ':attribute باید IP آدرس وارد شده IPv4 باشد.',
  'ipv6'           => ':attribute باید IP آدرس وارد شده IPv6 باشد.',
  'json'           => ':attribute باید مقدار وارد شده JSON باشد.',
  'max'            => [
    'numeric'      => ':attribute نباید بزگتر از :max باشد',
    'file'         => ':attribute نباید بزگتر از :max کیلوبایت باشد.',
    'string'       => ':attribute نباید بیشتر از :max کارکتر باشد.',
    'array'        => ':attribute نباید بیشتر از :max آیتم باشد.',
  ],
  'mimes'          => ':attribute پسوند و نوع فایل باید: :values باشد',
  'mimetypes'      => ':attribute پسوند و نوع فایل باید: :values باشد',
  'min' => [
      'numeric'    => ':attribute حداقل باید :min باشد',
      'file'       => ':attribute حداقل باید :min کیلوبایت باشد.',
      'string'     => ':attribute حداقل باید :min کارکتر باشد.',
      'array'      => ':attribute حداقل باید :min آیتم باشد.',
  ],
  'not_in'               => ':attribute معتبر نیست.',
  'not_regex'            => ':attribute فرمت وارد شده معتبر نیست.',
  'numeric'              => ':attribute باید یک عدد باشد.',
  'present'              => ':attribute باید موجودیت داشته باشد.',
  'regex'                => ':attribute فرمت قابل قبول نیست.',
  'required'             => 'فیلد :attribute اجباری است.',
  'required_if'          => 'فیلد :attribute اجباری است در صورتی که :other برابر با :value باشد',
  'required_unless'      => 'فیلد :attribute اجباری است مگر اینکه :other برابر با :values باشد',
  'required_with'        => 'فیلد :attribute اجباری است وقتی که :values موجود باشد.',
  'required_with_all'    => 'فیلد :attribute اجباری است اگر :values موجود باشد.',
  'required_without'     => 'فیلد :attribute اجباری است وقتی که :values موجود نباشد.',
  'required_without_all' => 'فیلد :attribute اجباری است اگر هیچ یک از :values موجود نباشد.',
  'same' => ':attribute و :other باید یکسان باشند.',
  'size' => [
    'numeric'       => ':attribute باید :size باشد',
    'file'          => ':attribute باید :size کیلوبایت باشد.',
    'string'        => ':attribute باید :size کاراکتر باشد.',
    'array'         => ':attribute باید شامل :size آیتم باشد.',
],
'string'            => ':attribute باید حروف باشد.',
'timezone'          => ':attribute زمان باید معتبر باشد.',
'unique'            => ':attribute این مقدار قبلا ثبت شده و تکراری است.',
'uploaded'          => ':attribute آپلود دچار اشکال شده است.',
'url'               => ':attribute فرمت قابل قبول نمیباشد.',
  'custom'   => [
    'attribute-name' => [
      'rule-name' => 'پیام سفارشی',
    ],
  ],
];