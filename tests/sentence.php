<?php
use Xiaohuilam\LaravelTimePattern\Pattern;

require __DIR__ . '/boot.php';

dump(Pattern::parse('在2020.1前，上海要率先实现垃圾分类。并的2021年12月前向全国推广成功经验。')); // x
dump(Pattern::parse('在2020.1前，上海要率先实现垃圾分类')); // x
dump(Pattern::parse('我一月吃了一月饼')); // √
dump(Pattern::parse('我一月份吃了一月饼')); // √
dump(Pattern::parse('客户今天来了，明天应该可以签合同')); // √
dump(Pattern::parse('我下周结婚了，下下周才有空呢')); // √ x
dump(Pattern::parse('明年我还能遇见你么?')); // √
dump(Pattern::parse('二月春风似剪刀')); // √
dump(Pattern::parse('今年下半年吧')); // √
dump(Pattern::parse('这两天你把钱打过来吧')); // x
dump(Pattern::parse('五月三十号晚上八点半，迪克酒吧见')); // x

dump(Pattern::parse('在2020.1前，上海要率先实现垃圾分类。并的2021年12月前向全国推广成功经在2020.1前，上海要率先实现垃圾分类。我一月吃了一我一月份吃了一月饼。客户今天来了，明天应该可以签合同。我下周结婚了，下下周才有空呢。明年我还能遇见你吗？二月春风似剪刀。今年下半年吧！这两天你把钱打过来。五月三十号晚上八点半，迪克酒吧见')); // x
