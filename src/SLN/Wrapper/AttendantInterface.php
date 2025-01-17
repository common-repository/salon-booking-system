<?php

interface SLN_Wrapper_AttendantInterface
{
    function getNotAvailableOn($key);
    function getEmail();
    function getPhone();
    function isNotAvailableOnDate(SLN_DateTime $date, SLN_Wrapper_ServiceInterface $service=null);
    function isNotAvailableOnDateDuration(SLN_DateTime $date, DateTime $duration, SLN_Wrapper_ServiceInterface $service);
    function getAvailabilityItems();
    function getHolidayItems();
    function getNotAvailableString();
    function getServicesIds();
    function getServices();
    function hasService(SLN_Wrapper_ServiceInterface $service);
    function hasServices($services);
    function hasAllServices();
    function getGoogleCalendar();
    function getName();
    function getContent();
    function getMeta($key);
    function canMultipleCustomers();
}
