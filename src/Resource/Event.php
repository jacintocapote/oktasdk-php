<?php

namespace Okta\Resource;

/**
 * Implementation of the Okta Events resource, access via $okta->event
 *
 * http://developer.okta.com/docs/api/resources/events.html
 */
class Event extends Base
{

    /**
     * Fetch a list of events from your Okta organization system log
     *
     * @param  array $query Array of query parameters/values
     * @return array        Array of Events
     */
    public function listEvents(array $query = null) {

        $request = $this->request->get('events');

        if (isset($query)) $request->query($query);

        return $request->send();

    }

}
