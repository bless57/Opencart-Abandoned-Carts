<?php
$_['text_module']               = 'Moduller';
$_['heading_title']             = 'Terk Edilen Siparişler';
// Module strings
$_['tab_controlpanel']          = 'Kontrol Panel';
$_['tab_abandonedcarts']        = 'Terk Edilen Siparişler';
$_['tab_templates']             = 'Mail Şablonu';
$_['tab_analytics']             = 'İstatistikler';
$_['tab_scheduled_tasks']       = 'Zamanlanmış Görevler';
$_['tab_coupons']               = 'Kuponlar';
$_['tab_givencoupons']          = 'Verilmiş Kuponlar';
$_['tab_usedcoupons']           = 'Kullanılmış Kuponlar';
$_['tab_support']               = 'Destek';
$_['btn_savechanges']           = 'Kaydet';
$_['btn_cancel']                = 'İptal';
$_['text_success']              = 'Başarılı: Terk Edilen Siparişler modülünü değiştirdiniz!';
$_['text_default']		        = '(Varsayılan)';
$_['text_status']               = 'Eklenti Durumu:';
$_['text_status_help']          = 'Bu, modülün ana anahtarıdır. Uzantıyı <strong> etkinleştirir </strong> veya <strong> devre dışı bırakır</strong>.';
$_['text_dateformat']           = 'Tarih Formatı:';
$_['text_dateformat_help']      = 'Buradan e-postalarda gösterilecek kupon geçerliliğinin bitiş tarihi için tarih biçiminin nasıl olacağını seçebilirsiniz. İndirim kodları kullanmıyorsanız, bu seçeneği göz ardı edebilirsiniz.';
$_['text_applytaxes']           = 'Vergileri Uygula: (!)';
$_['text_applytaxes_help']      = 'E-postalardaki ürünler için vergiler (vergiler kullanıyorsanız) uygulamak için bu seçeneği etkinleştirin. Ürünlerinizde verginiz yoksa, bu seçeneği değiştirmek sizin için hiçbir fark yaratmayacaktır. <br /> <br /> <strong> NOT: </strong> Bu deneysel bir özelliktir.';
$_['text_expired_coupons']      = 'Süresi Dolmuş Kuponları Kaldır:';
$_['text_expired_coupons_help'] = 'Modülden yaratılan son kullanma tarihi geçmiş kuponları kaldırın. <br /> <br /> <strong> NOT: </strong> Kuponların kullanılıp kullanılmadığı önemli değildir. Modülden üretilen son kullanma tarihi geçmiş kuponlar kaldırılacaktır.';
$_['btn_clear_expired_coupons'] = 'Kuponları temizle!';
$_['text_send_bcc']             = 'Mağaza Sahibine BCC gönder:';
$_['text_send_bcc_help']        = 'Bu seçeneği etkinleştirmek, mağaza ana e-postasını BCC alıcısı olarak ekler';
$_['text_sched_tasks']          = 'Zamanlanmış Görevler:';
$_['text_sched_tasks_help']     = 'Etkinleştirildiğinde, bu işlev, siparişlerini terk eden müşterilere otomatik olarak e-posta gönderir.';
$_['text_sched_type']           = 'Tipi:';
$_['text_sched_type_help']      = 'Programın türünü seçin.';
$_['select_fixed_dates']        = 'Sabit tarihler';
$_['select_periodic_date']      = 'Periyodik';
$_['text_schedule']             = 'Zamanlama:';
$_['text_schedule_help']        = 'Hatırlatıcılar için zamanlama programını girin. Yukarıda belirtilen seçeneğe bağlı olarak sabit tarihler veya periyodik fonksiyonlar için seçenekleri göreceksiniz. <br /> <br/> <strong> ÖNEMLİ: </strong> Tüm mağazaların zamanlamasının global değişken olduğunu unutmayın. ';
$_['text_date']                 = 'Tarih...';
$_['text_time']                 = 'Zaman...';
$_['btn_add']                   = 'Ekle';
$_['alert_date_time']           = 'Lütfen tarihi ve saati doldurun!';
$_['alert_remove_coupons']      = 'Süresi dolan kuponlar kaldırıldı! Sayfa şimdi yeniden yüklenecek.';
$_['confirm_remove_coupons']    = 'Son kullanma tarihi geçmiş kuponları kaldırmak istediğinizden emin misiniz?';
$_['confirm_template_remove']   = 'Kaldırmak istediğine emin misin';
$_['btn_add_template']          = 'Yeni Şablon Oluştur';
$_['text_template']             = 'Şablon';
$_['text_status_small']         = 'durum:';
$_['text_name_small']           = 'isim:';
$_['text_template_help']        = 'Seçili posta şablonu yapılandırmasını etkinleştirin veya devre dışı bırakın.';
$_['text_name_help']            = 'Sol sütunda görünecek şablonun adını ayarlayın.';
$_['text_message_delay']        = '-Den Sonra Gönder:';
$_['text_message_delay_help']   = 'E-postayı göndermek için kaç gün geçtikten sonra gönderileceğini tanımlayın. <br /> <br /> <strong> NOT: </strong> Gecikmeyi 0 olarak ayarlarsanız, e-posta, siz cron işini çalıştırdıktan hemen sonra gönderilir.';
$_['text_days_small']           = 'gün';
$_['text_type_of_discount']     = 'İndirim Tipi:';
$_['text_type_of_discount_help']    = 'Eğer \'İndirim Yok\', seçecekseniz, aşağıdaki kodları mailden kaldırmanız gerekir: {discount_code}, {discount_value}, {total_amount} and {date_end}.';
$_['text_percentage']           = 'Oran';
$_['text_fixed_amount']         = 'Sabit Değer';
$_['text_no_discount']          = 'İndirim Yok';
$_['text_discount']             = 'İndirim:';
$_['text_discount_help']        = 'İndirim yüzdesini veya değerini girin.';
$_['text_total_amount']         = 'Toplam Değer:';
$_['text_total_amount_help']    = 'Sepet bu toplam değere ulaştığında kupon aktif olur.';
$_['text_discount_free_shipping']       = 'Ücretsiz Kargo:';
$_['text_discount_free_shipping_help']  = 'Oluşturulan kupon için ücretsiz gönderim özelliğini etkinleştirin / devre dışı bırakın.';
$_['text_discount_customer_login']      = 'Müşteri Giriş:';
$_['text_discount_customer_login_help'] = 'Kuponu kullanmak için müşterinin giriş yapması gerekmektedir. <br /> <br /> <strong> NOT: </strong> Modül, misafir müşterilere de (e-posta sağlandığında) e-posta gönderebilir. Bu seçeneği "Evet" olarak ayarlarsanız ve misafirin müşteri kayıtları varsa, oluşturulan kuponların onlar için çalışmayacağını unutmayın..';
$_['text_discount_validity']    = 'İndirim Geçerliliği:';
$_['text_discount_validity_help']   = 'Hatırlatıcıyı gönderdikten sonra indirim kodunun kaç gün aktif olacağını tanımlayın.';
$_['text_apply_discount']       = 'İçin İndirim Uygulayın:';
$_['text_apply_discount_help']  = 'İndirimin uygulanacağı ürünleri seçin.';
$_['text_all_products']         = 'Mağazadaki tüm ürünler';
$_['text_specific_products']    = 'Sepetindeki ürünler';
$_['text_product_dimensions']   = 'Ürün Resmi Boyutları:';
$_['text_product_dimens_help']  = 'Müşterilerin bu şablondan alacağı e-postadaki ürün resimlerinin genişliğini ve yükseliğini tanımlayın.';
$_['text_width']                = 'Genişlik:';
$_['text_height']               = 'Yükseklik:';
$_['text_message_customer']     = 'Müşteriye Mesaj:';
$_['text_message_customer_help']    = 'Aşağıdaki kısa kodları kullanabilirsiniz: <br /> <br /> <strong> Konu: </strong> <br /> {firstname} - İsim <br /> {lastname} - Soyadı <br /> <br / > <strong> Şablon: </strong> <br /> {firstname} - İsim <br /> {lastname} - Soyadı <br /> {cart_content} - Sepet içeriği <br /> {discount_code} - İndirim kodu <br /> {discount_value} - İndirim değeri <br /> {total_amount} - Toplam tutar <br /> {date_end} - Kupon geçerliliğinin bitiş tarihi <br/> {unsubscribe_link} - Abonelik iptali bağlantısı <br /> {restore_link} - Sepeti geri yükle bağlantısı<br /> <br /> *** {restore_link} inin yalnızca "E-posta gönderildikten sonra, iptal edilen alışveriş sepetini kaldır" seçeneği devre dışı iken çalışacağını unutmayın.';
$_['text_template_sample']      = 'Template Subject';
$_['column_text_template']      = '<p> Merhaba <strong> {firstname} {lastname} </strong>, </p> <p> Mağazamıza son ziyaretiniz sırasında aşağıdaki ürünleri alışveriş sepetinize koydunuz ve ödeme işleminden vaz geçtiniz. Bir sebepten dolayı siparişi tamamlamadınız: </p> {cart_content} <p> Neden bu süreyi satın almamaya karar verdiğinizi bilmiyoruz, ancak size özel bir indirim kodu vermek istiyoruz - <strong> {discount_code} </strong> - size <strong> %{discount_value} İndirim </strong> verir. Kod, <strong> TL {total_amount} </strong> harcadıktan sonra geçerlidir. Bu indirim sadece size özel ve <strong> {date_end} </strong> tarihinde sona eriyor. </p> <p> Saygılarımızla, </p>';
$_['text_remove_empty_records'] = 'Boş Kayıtları Kaldır:';
$_['text_remove_empty_help']    = 'CRON çalıştırıldığında, şablondaki belirli gecikme için tüm boş kayıtlar silinir.';
$_['text_additional_options']   = 'Ek Ayarlar:';
$_['text_additional_options_help']  = 'Burada e-postalar için ek seçenekleri bulabilirsiniz.';
$_['text_remove_email_after_sending']   = 'E-posta gönderildikten sonra, iptal edilen alışveriş sepetini kaldır.<br /><br />Bu seçenek, mağaza sahiplerinin modülün CRON işini bir kereden fazla kullanmak istediği durumlar için kullanışlıdır. Bu, müşterilerin aynı e-postayı birden fazla kez almamasını sağlayacaktır.';
$_['text_skip_out_of_stock']    = 'Hatırlatmaları gönderirken biten stokları atla. <br /> <br /> Bu seçenek seçildiğinde, müşteri sepetindeki stokta olmayan ürünler, e-postaya dahil edilmeyecektir. Ürünlerin hiçbiri stokta değilse - e-posta gönderilmez.';
$_['text_type']                 = 'Tipi';
$_['text_count']                = 'Adet';
$_['text_coupons']              = 'Kuponlar';
$_['text_abandoned_carts']      = 'Terk Edilen Siparişler';
$_['text_used_coupons']         = 'Kullanılan Kuponlar';
$_['text_notused_coupons']      = 'Kullanılmayan Kuponlar';
$_['text_total_coupons']        = 'Tüm Kuponlar:';
$_['text_registerd_customers']  = 'Üye müşterile';
$_['text_guest_customers']      = 'Misafir müşteriler';
$_['text_total_carts']          = 'Toplam terk edilen siparişler:';
$_['text_total_carts_2']        = 'Toplam Sepetler';
$_['text_last_visited_carts']   = 'Son ziyaret edilen sayfa';
$_['column_coupon_name']        = 'Kupon ismi';
$_['column_code']               = 'Kod';
$_['column_discount']           = 'İndirim';
$_['column_date_start']         = 'Başlangıç Tarihi';
$_['column_date_end']           = 'Bitiş Tarihi';
$_['column_status']             = 'Durum';
$_['column_date_added']         = 'Eklenme Tarihi';
$_['text_no_results']           = 'Sonuç Yok!';
$_['text_default_ac_tab_name']  = 'Varsayılan (bildirilmemiş)';
$_['text_already_notified_tab_name']    = 'Henüz bildirilmiş (en az bir kere)';
$_['text_ordered_tab_name']     = 'Ordered';
$_['text_ID_number']            = 'ID';
$_['text_customer_info']        = 'Müşteri Bilgisi';
$_['text_shopping_cart_info']   = 'Alışveriş Sepeti';
$_['text_date_time_info']       = 'Tarih & Zaman';
$_['text_last_visited_page']    = 'Son Ziyaret Edilen Sayfa';
$_['text_ip_info']              = 'IP';
$_['text_status_actions']       = 'Durum & Aksiyonlar';
$_['text_not_provided']         = '(sağlanamıyor)';
$_['text_guest_label']          = 'Misafir';
$_['text_language_label']       = 'Dil:';
$_['text_guest_customer_label'] = 'Misafir müşteri';
$_['text_registed_customer_label']  = 'Kayıtlı müşteri';
$_['text_customer_more_helper'] = 'Müşteri hakkında daha fazla bilgi için tıklayın';
$_['text_more_word']            = 'Daha Fazla';
$_['text_check_ip_location']    = 'IP Kontrol Et';
$_['text_send_reminder_action'] = 'Hatırlatıcı gönder';
$_['text_remove_button']        = 'Sil';
$_['text_ac_status']            = 'Durum:';
$_['text_notified']             = 'Bildirim Gönderilmiş';
$_['text_ordered']              = 'Sipariş Verilmiş';
$_['text_yes']                  = 'Evet';
$_['text_no']                   = 'Hayır';
$_['text_no_records']           = 'Henüz kayıt yok.';
$_['text_remove_all']           = 'Hepsini Sil';
$_['text_remove_all_empty_records'] = 'Tüm boş kayıtları sil';
$_['text_you_cannot_send_helper']   = 'Mail adresi olmadan yada hiç sipariş vermeden bir müşterime mail atamazsınız.';
$_['text_confirm_remove_all_records']   = 'Bu mağazadaki tüm kayıtları kaldırmak istediğinizden emin misiniz?';
$_['text_confirm_remove_all_empty_records'] = 'Bu mağazadaki tüm boş kayıtları (e-posta olmayan) silmek istediğinizden emin misiniz?';
$_['text_learn_more_user_location_helper']  = 'Müşterinin konumu hakkında daha fazla bilgi için buraya tıklayın';
$_['text_first_visit']          = 'İlk Ziyaret:';
$_['text_last_visit']           = 'Son Ziyaret:';
$_['text_total_time_spent']     = 'Harcanan Zaman:';
$_['text_confirm_remove_entry'] = 'Bu girişi kaldırmak istediğinizden emin misiniz?';
$_['text_close']                = 'Kapat';
$_['text_send_mail']            = 'Mail gönder!';
$_['text_send_reminder']        = 'Hatırlatıcı gönder';
$_['text_checkout_fixes']       = 'Ödeme Düzeltme: (!)';
$_['text_checkout_fixes_help']  = 'Bu özellik, ödeme sonrasındaki özel başarı sayfalarına sahip siteler için kullanışlıdır. Bu sayfalar, siparişler hakkında tam bilgi içermez ve kaydın modülden kaldırmasını engeller, bu da bazı müşterilerinizin siparişlerini vermiş olsalar bile, "terk edilmiş siparişlere" yönelik e-posta almalarıyla sonuçlanabilir. Bu özelliği "Etkin" olarak ayarlamak, bu sorunları çözmelidir. <br /> <br /> <strong> NOT: </strong> Bu, deneysel bir özelliktir.';
$_['text_dashboard_widget']     = 'Mağazanın Gösterge Tablosunda Widget Göster:';
$_['text_dashboard_widget_help']= 'Mağaza sayfanızdaki varsayılan araçlara benzer bir widget göstererek mağazanızdaki terkedilmiş sipariş sayısını gösterir.';
$_['text_menu_widget']          = 'OpenCart Ana Menüsünde Bağlantıyı Göster:';
$_['text_menu_widget_help']     = 'Ana OpenCart yönetici menüsünde modülün bir bağlantısını gösterir. Ayrıca mağazanızdaki terkedilmiş siparişlerin sayısını da gösterir..';
$_['text_total']                = 'Toplam:';
$_['btn_text_cron']             = 'CRONu Test Edin';
$_['text_test_cron']            = 'CRON durumu:';
$_['text_test_cron_help']       = 'CRON servisinin sunucunuzda desteklenip desteklenmediğini kontrol etmek için buraya tıklayın.';
$_['text_module_view_settings'] = 'Modül Görünüm Ayarları:';
$_['text_experimental_settings']= 'Deneysel Ayarlar:';
$_['text_main_settings']        = 'Ana Ayarlar:';
$_['text_scheduling_settings']  = 'Zamanlama Ayarları:';
$_['text_cron_faq']             = 'Sık Sorulan Sorular:';
// Helpers
$_['helper_id']                 = 'Her kaydın kendine özgü bir kimlik numarası vardır.';
$_['helper_customer']           = 'Bu sütun, terk edilmiş siparişlerle olan müşterilerle ilgili bilgileri gösterir.';
$_['helper_shopping_cart']      = 'Bu sütun, müşterilerinizden terk edilmiş siparişleriniz içeriğini  görüntüler.';
$_['helper_date_time_info']     = 'Müşteriler mağazanızı ne zaman ve ne kadar sürede gezdiklerini gösterir.';
$_['helper_last_page']          = 'Buradan müşterilerin hangi sayfaları gezerken mağazanızdan ayrıldığını görebilirsiniz.';
$_['helper_ip_info']            = 'Burada müşterilerin IP adreslerini topluyoruz.';
$_['helper_actions']            = 'Müşterilere mesaj gönderebilir veya kayıtları silebilirsiniz.';
// Licensing
$_['text_your_license']         = 'Your License';
$_['text_please_enter_the_code']= 'Please enter your product purchase license code:';
$_['text_activate_license']     = 'Activate License';
$_['text_not_having_a_license'] = 'Not having a code? Get it from here.';
$_['text_license_holder']       = 'License Holder';
$_['text_registered_domains']   = 'Registered domains';
$_['text_expires_on']           = 'License Expires on';
$_['text_valid_license']        = 'VALID LICENSE';
$_['text_manage']               = 'manage';
$_['text_get_support']          = 'Get Support';
$_['text_community']            = 'Community';
$_['text_ask_our_community']    = 'We have a big community. You are free to ask it about your issue on the iSenseLabs forum.';
$_['text_browse_forums']        = 'Browse forums';
$_['text_tickets']              = 'Tickets';
$_['text_open_a_ticket']        = 'Want to comminicate one-to-one with our tech people? Then open a support ticket.';
$_['text_open_ticket_for_real'] = 'Open a ticket';
$_['text_pre_sale']             = 'Pre-sale';
$_['text_pre_sale_text']        = 'Have a brilliant idea for your webstore? Our team of top-notch developers can make it real.';
$_['text_bump_the_sales']       = 'Bump the sales';
// Strings for emails
$_['text_product']	            = 'Ürün';
$_['text_price']	            = 'Fiyat';
$_['text_qty']	                = 'Adet';
$_['text_unsubscribe']          = 'Üyelikten ayrıl.';
// Custom alerts
$_['alert_invalid_email']       = 'Müşteri tarafından girilen e-posta geçersiz.';
// Very custom
$_['text_close_text']           = 'Kapat';
// CRON
$_['text_sched_notify']         = 'Bildirim E-postası Al:';
$_['text_sched_notify_help']    = 'Mağaza ayarlarında ayarlanan e-posta adresine gönderilen e-postaların sayısını içeren bir e-posta gönderilecektir.';
$_['heading_what_is_cron']      = 'CRON Nedir?';
$_['heading_how_to_setup_cron'] = 'CRON işi nasıl kurulur?';
$_['heading_cron_not_appearing']= 'CRON işi yaptım, ama görünmedi mi? Niye?';
$_['heading_cron_no_support']   = 'Sunucum CRON işlerini desteklemiyor. Ne yapmalıyım?';
$_['heading_cron_modal']        = 'Zamanlama seçenekleri ve CRON işleri';
$_['cron_what_is_cron']         = 'Programlama özelliklerini kullanmak istiyorsanız, sunucunuzun <strong> CRON </strong> işlevlerini desteklemesi gerekir. <br /> <br /> <strong> CRON </strong> belirli tarih ve saatlerde arka plan, komutlarını yürüten uzun işlemdir. "<strong> Test CRON desteği </strong>" düğmesini tıklayarak sunucunuzun <strong> CRON </strong> komutlarını destekleyip desteklemediğini kontrol edebilirsiniz. Başka çalışan CRON işleriniz varsa ve hizmet etkinse, yeni açılan pencerede görüntülenen "Geçerli CRON işleri" listesinde bunları görebilmeniz gerekir.';
$_['cron_setup_text']           = 'Yukarıdaki ayarları yapmanız ve "Değişiklikleri Kaydet" düğmesine tıklamanız yeterlidir. Sayfa yenilenecek ve CRON işini "Test CRON desteği" açılır pencerede görüntülenen "Geçerli CRON işleri" listesinin altında görebilmeniz gerekir. <br /> <br /> <strong> NOT: </strong> Modülün müşterilerinize e-posta gönderebilmesi için en az bir etkin posta şablonunuzun olması gerektiğini unutmayın.';
$_['cron_does_not_support']     = 'Sunucunuz CRON işlerini destekliyorsa, ancak siz kurduktan sonra "Geçerli CRON işleri" listesinde görünmüyorsa, CRON komutlarının otomatik oluşturulmasını sağlayan komutların hosting sağlayıcınız tarafından devre dışı bırakıldığı anlamına gelir. Bu durumda, aşağıdaki komut dizesini kullanabilirsiniz:';
$_['cron_does_not_support_2']   = 'Yukarıdaki betik <strong> her gün 00: 00 da </strong> yürütülecektir. Tercihlerinize bağlı olarak değiştirebilirsiniz.';
$_['cron_support_external']     = 'Sunucunuz cron işlerini desteklemiyorsa, <strong> easycron.com </strong>, <strong> setcronjob.com </strong> gibi hizmetleri veya bu özelliği sağlayabilecek diğer kişileri kullanmayı deneyebilirsiniz. <br /> <br /> Bunu yapmak için, seçili servise kayıt olmanız ve bu URLyi yürütmek için kullanmanız gerekir:';
$_['cron_support_external_2']   = 'Yukarıdaki <strong> Zamanlanmış Görevler </strong> özelliğini de etkinleştirmeli ve her şablonda <strong> Gecikme (-den Sonra Gönder) </strong> seçeneğini ayarlamanız gerekir.';
$_['heading_cron_more_than_once']   = 'CRONu günde bir kereden fazla yürütmek için nasıl kurabilirim?';
$_['cron_more_than_once']       = 'Bu, şu anda <strong> CRON </strong> işini günde bir kez <strong> bir kez </strong> yürütecek şekilde ayarlayabileceğinizi fark ettiğiniz anlamına gelir. Bunun nedeni, deneyimlerimizde, müşterilerin çoğunun bir kereden fazla bir e-posta almaları durumunda hayal kırıklığına uğratılmalarıdır. <br /> <br /> Bildiğiniz gibi, şablonlarımız bir <strong> Gecikme </strong> değerine sahiptir. Yani CRON yürütüldüğünde, verilen şablondaki gecikmeyle eşleşen tüm siparişleri kontrol eder. Bununla birlikte, eğer <strong> CRON </strong> birden fazla kez çalıştırılırsa, bu kontrol bir kereden fazla sürecektir, bu da e-postaların bir kereden fazla gönderilmesiyle sonuçlanacaktır. <br /> <br /> <strong> Hâlâ </strong>, e-postaları günde bir kereden fazla göndermek istiyorsanız, bu işlemi kolaylıkla yapabilirsiniz. Yapmanız gereken şey: <br /> <br /> <ol> <li> <strong> CRON </strong> komutunu, ne sıklıkta istediğinize bağlı olarak <strong>crontab</strong>nızda el ile ayarlayın. </li> <li> <strong> 0 </strong> gün gecikmesiyle <strong> tek bir </strong> e-posta şablonu ayarlayın. </li> <li> Bu işte! </li> </ol> Görebildiğiniz gibi, e-postaları herhangi bir kodlama olmaksızın günde bir kereden fazla gönderebilirsiniz. Tek sınırlama, kullanabileceğiniz sadece bir şablona sahip olmanıznır.';
$_['cron_no_support_helper']    = 'Sunucunuz CRON işlerini desteklemiyorsa, alternatifleri görmek için SSS bölümüne aşağı inin.';
$_['text_cron_status']          = 'CRON iş durumu:';
$_['text_cron_current_jobs']    = 'Geçerli CRON işleri:';
$_['text_shell_exec_function']  = 'shell_exec () işlev durumu:';
$_['text_cron_system']          = 'Sistem bilgisi:';
$_['text_cron_enabled']         = 'Aktif';
$_['text_cron_disabled']        = 'Devre Dışı';
$_['text_cron_writable']        = 'Yazılabilir';
$_['text_cron_unwritable']      = 'Yazılamaz';
// 2.3 
$_['widget_2_3_x_text']         = '<strong> ÖNEMLİ </strong>: Bu özellik artık Uzantılar -> Uzantılar -> Gösterge Panelinde bulunuyor. Orada "Toplam Terk Edilen Siparişler" eklentisi bulabilir ve etkinleştirebilirsiniz.';
$_['text_restorecart']          = 'Sepeti Görüntüle';
