@extends('layout')

@section('content')

    @php



    @endphp



    <div class="content p-4 mt-2 bg-white text-Black rounded">
        <h1 class=" text-black">  <i class="fas fa-book-open text-orange"></i> Инструкция</h1>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-black">
                        <p> В меню слева находится кнопка Настройки.</p>
                        <p>1. Необходимо вставить токен Kaspi в соответствующее поле. Токен Kaspi находится в кабинете Kaspi продавца - Настройки - Токен API. Если токена нет, то нажмите Сгенерировать токен.</p>
                        <p>2. Выбрать на какую организацию МоегоСклада будет приходить заказ </p>
                        <p>3. Выбрать какие типы документов будут создаваться (Отгрузка, Счёт-фактура). Документы создаются на статусах Завершён, Отменён, Возвращён. </p>
                    </div>
                    <div class="col-sm-6">
                        <div class="embed-responsive embed-responsive-16by9 ">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/iBlyGEGOPcI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="text-black">
                        <p> 3.1 Не создавать - не будут создаваться никакие документы. </p>
                        <p>    3.2 Отгрузка - будет создаваться документ Отгрузка из Заказа покупателя.</p>
                        <p>    3.3 Отгрузка + Счёт-фактура выданный - будет создаваться документы Отгрузка и Счёт-фактура выданный из Заказа покупателя.</p>
                        <p>    *Если не выбрать создание документа Отгрузка/Счёт-фактура, то в случае Возврата или Отмены заказа Платежный документ удаляется.</p>
                        <p>    *Если выбрать создание документа Отгрузка/Счёт-фактура, то в случае Возврата или Отмены заказа создаются Возврат покупателя/Счёт-фактура выданный, Возвратный платёж (Приходный или Исходящий платёж, в зависимости от выбранного типа в п.4)</p>
                        <p>    4. Выбрать какой тип платёжного документа будет создаваться при заказе. Платежный документ создается на статусе Принят на обработку продавцом.</p>
                        <p>    4.1 Не создавать - не будут создаваться платёжные документы.</p>
                        <p>    4.2 Приходной ордер - будет создаваться Приходной ордер из Заказа покупателя.</p>
                        <p>    4.3 Входящий платёж - будет создаваться Входящий платёж из Заказа покупателя.</p>
                        <p>    4.3.1. Выбор расчётного счёта - счёт организации, на который будет создаваться Входящий платёж. Данный пункт доступен при выборе создания Входящего платежа. Если у вас нет счета, создайте его в настройках Юр.лица МоегоСклада.</p>
                        <p>    5. Выбор проекта – выбор на какой Проект будет создаваться заказ (не обязательно).</p>
                        <p>    6. Выбор канала продаж – выбор на какой Канал продаж будет создаваться заказ (не обязательно).</p>
                        <p>    7. Способ проверки товара - будет проверяться соответствие товара в МоемСкладе. Товары создаются только в том случае, если поступил заказ из Kaspi.</p>
                        <p>    7.1. По артикулу – будет происходить проверка по артикулу товара в МоемСкладе. Артикул является основным параметром в Kaspi.</p>
                        <p>     7.2. По названию – будет происходить проверка по названию товара в МоемСкладе.</p>
                        <p>    7.3. По артикулу и названию - будет происходить проверка по названию и артикулу товара в МоемСкладе.</p>
                        <p>     *Если изменить товар в Kaspi после заказа, то изменения в МойСклад не придут, будет создан новый товар при новом заказе.</p>
                        <p>     8. Сопоставьте статусы заказов покупателя в МоемСкладе – будет отображаться на каком статусе находится заказ в Kaspi.</p>
                        <p>     *Изменение статуса в МоемСкладе НЕ изменяет статус в Kaspi.</p>
                        <p>     *С левой стороны находятся статусы Kaspi, с правой стороны - статусы МоегоСклада.</p>
                        <p>     9. Нажмите Сохранить.</p>
                        <p>     *Если все корректно, то настройки сохранятся и можно начинать обрабатывать заказы.</p>
                        <p>     *Если что-то сделано неверно, то выйдет соответствующая ошибка.</p>
                    </div>



                </div>
            </div>
    </div>



@endsection

