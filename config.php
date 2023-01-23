<?php

class Config
{
    // free-kassa
    const MERCHANT_ID = 'ид';
    const SECRET_KEY_1 = 'код1';
    const SECRET_KEY_2 = 'код2';
    
    // тут чета HOS7.RU.
    const ITEM_PRICE = 1;
	const ITEM_PRICEX3 = 0.3;

    // hos7.ru`
    const TABLE_ACCOUNT = 'PLAYERS';
    // Íàçâàíèå ïîëÿ èç òàáëèöû íà÷èñëåíèÿ òîâàðà ïî êîòîðîìó ïðîèçâîäèòñÿ ïîèñê àêêàóíòà/ñ÷åòà, íàïðèìåð `email`
    const TABLE_ACCOUNT_NAME = 'USERNAME';
    // Íàçâàíèå ïîëÿ èç òàáëèöû íà÷èñëåíèÿ òîâàðà êîòîðîå áóäåò óâåëè÷åíî íà êîëëè÷åâî îïëà÷åíîãî òîâàðà, íàïðèìåð `sum`, `donate`
    const TABLE_ACCOUNT_DONATE= 'pDonate';

    // Ïàðàìåòðû ñîåäèíåíèÿ ñ áä
    // Õîñò
    const DB_HOST = 'localhost';
    // Èìÿ ïîëüçîâàòåëÿ
    const DB_USER = 'юзер';
    // Ïàðîëü
    const DB_PASS = 'Пароль';
    // Íàçûâíèå áàçû
    const DB_NAME = 'Имя базы';
}