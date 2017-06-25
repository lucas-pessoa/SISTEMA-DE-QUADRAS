jQuery("#simulation")
  .on("click", ".s-c1a22831-ef8a-41b3-9af5-438e86d2c10e .click", function(event, data) {
    var jEvent, jFirer, cases;
    if(data === undefined) { data = event; }
    jEvent = jimEvent(event);
    jFirer = jEvent.getEventFirer();
    if(jFirer.is("#s-Label_5")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimNavigation",
                  "parameter": {
                    "target": "screens/d55c4851-59a3-4429-9a8b-8beec7987b08"
                  },
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Label_6")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimNavigation",
                  "parameter": {
                    "target": "screens/d014ca1c-b959-4de4-8696-3192d8132c30"
                  },
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Label_7")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimNavigation",
                  "parameter": {
                    "target": "screens/d014ca1c-b959-4de4-8696-3192d8132c30"
                  },
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Button_1")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimNavigation",
                  "parameter": {
                    "target": "screens/5d607fd9-9ea1-4aad-9210-05da46ede497"
                  },
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Button_2")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimNavigation",
                  "parameter": {
                    "target": "screens/5d607fd9-9ea1-4aad-9210-05da46ede497"
                  },
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    }
  })
  .on("mouseenter dragenter", ".s-c1a22831-ef8a-41b3-9af5-438e86d2c10e .mouseenter", function(event, data) {
    var jEvent, jFirer, cases;
    if(data === undefined) { data = event; }
    jEvent = jimEvent(event);
    jFirer = jEvent.getDirectEventFirer(this);
    if(jFirer.is("#s-Label_5") && jFirer.has(event.relatedTarget).length === 0) {
      event.backupState = true;
      event.target = jFirer;
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_5": {
                      "attributes": {
                        "width": "jimEvent.fn.getCurrentStyle('width', '#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_5') + jimEvent.fn.getCurrentStyle('padding-left', '#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_5') + jimEvent.fn.getCurrentStyle('padding-right', '#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_5') - 14 - 0",
                        "height": "jimEvent.fn.getCurrentStyle('height', '#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_5') + jimEvent.fn.getCurrentStyle('padding-top', '#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_5') + jimEvent.fn.getCurrentStyle('padding-bottom', '#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_5') - 0 - 0",
                        "padding-top": "2px",
                        "padding-right": "2px",
                        "padding-bottom": "2px",
                        "padding-left": "16px",
                        "background-color": "#EEEEEE",
                        "background-image": "none",
                        "border-top-width": "1px",
                        "border-top-style": "solid",
                        "border-top-color": "#EEEEEE",
                        "border-right-width": "1px",
                        "border-right-style": "solid",
                        "border-right-color": "#EEEEEE",
                        "border-bottom-width": "1px",
                        "border-bottom-style": "solid",
                        "border-bottom-color": "#EEEEEE",
                        "border-left-width": "1px",
                        "border-left-style": "solid",
                        "border-left-color": "#EEEEEE",
                        "border-radius": "3px 3px 3px 3px"
                      },
                      "expressions": {
                        "width": "Math.max(170 - 1 - 1 - 16 - 2, 0) + 'px'",
                        "height": "Math.max(28 - 1 - 1 - 2 - 2, 0) + 'px'"
                      }
                    }
                  },{
                    "#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_5": {
                      "attributes-ie": {
                        "border-top-width": "1px",
                        "border-top-style": "solid",
                        "border-top-color": "#EEEEEE",
                        "border-right-width": "1px",
                        "border-right-style": "solid",
                        "border-right-color": "#EEEEEE",
                        "border-bottom-width": "1px",
                        "border-bottom-style": "solid",
                        "border-bottom-color": "#EEEEEE",
                        "border-left-width": "1px",
                        "border-left-style": "solid",
                        "border-left-color": "#EEEEEE",
                        "border-radius": "3px 3px 3px 3px",
                        "padding-top": "2px",
                        "padding-right": "2px",
                        "padding-bottom": "2px",
                        "padding-left": "16px",
                        "-pie-background": "#EEEEEE",
                        "-pie-poll": "false"
                      },
                      "expressions-ie": {
                        "width": "Math.max(170 - 1 - 1 - 16 - 2, 0) + 'px'",
                        "height": "Math.max(28 - 1 - 1 - 2 - 2, 0) + 'px'"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Label_6") && jFirer.has(event.relatedTarget).length === 0) {
      event.backupState = true;
      event.target = jFirer;
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_6": {
                      "attributes": {
                        "width": "jimEvent.fn.getCurrentStyle('width', '#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_6') + jimEvent.fn.getCurrentStyle('padding-left', '#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_6') + jimEvent.fn.getCurrentStyle('padding-right', '#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_6') - 14 - 0",
                        "height": "jimEvent.fn.getCurrentStyle('height', '#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_6') + jimEvent.fn.getCurrentStyle('padding-top', '#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_6') + jimEvent.fn.getCurrentStyle('padding-bottom', '#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_6') - 0 - 0",
                        "padding-top": "2px",
                        "padding-right": "2px",
                        "padding-bottom": "2px",
                        "padding-left": "16px",
                        "background-color": "#EEEEEE",
                        "background-image": "none",
                        "border-top-width": "1px",
                        "border-top-style": "solid",
                        "border-top-color": "#EEEEEE",
                        "border-right-width": "1px",
                        "border-right-style": "solid",
                        "border-right-color": "#EEEEEE",
                        "border-bottom-width": "1px",
                        "border-bottom-style": "solid",
                        "border-bottom-color": "#EEEEEE",
                        "border-left-width": "1px",
                        "border-left-style": "solid",
                        "border-left-color": "#EEEEEE",
                        "border-radius": "3px 3px 3px 3px"
                      },
                      "expressions": {
                        "width": "Math.max(170 - 1 - 1 - 16 - 2, 0) + 'px'",
                        "height": "Math.max(28 - 1 - 1 - 2 - 2, 0) + 'px'"
                      }
                    }
                  },{
                    "#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_6": {
                      "attributes-ie": {
                        "border-top-width": "1px",
                        "border-top-style": "solid",
                        "border-top-color": "#EEEEEE",
                        "border-right-width": "1px",
                        "border-right-style": "solid",
                        "border-right-color": "#EEEEEE",
                        "border-bottom-width": "1px",
                        "border-bottom-style": "solid",
                        "border-bottom-color": "#EEEEEE",
                        "border-left-width": "1px",
                        "border-left-style": "solid",
                        "border-left-color": "#EEEEEE",
                        "border-radius": "3px 3px 3px 3px",
                        "padding-top": "2px",
                        "padding-right": "2px",
                        "padding-bottom": "2px",
                        "padding-left": "16px",
                        "-pie-background": "#EEEEEE",
                        "-pie-poll": "false"
                      },
                      "expressions-ie": {
                        "width": "Math.max(170 - 1 - 1 - 16 - 2, 0) + 'px'",
                        "height": "Math.max(28 - 1 - 1 - 2 - 2, 0) + 'px'"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Label_7") && jFirer.has(event.relatedTarget).length === 0) {
      event.backupState = true;
      event.target = jFirer;
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_7": {
                      "attributes": {
                        "width": "jimEvent.fn.getCurrentStyle('width', '#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_7') + jimEvent.fn.getCurrentStyle('padding-left', '#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_7') + jimEvent.fn.getCurrentStyle('padding-right', '#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_7') - 14 - 0",
                        "height": "jimEvent.fn.getCurrentStyle('height', '#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_7') + jimEvent.fn.getCurrentStyle('padding-top', '#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_7') + jimEvent.fn.getCurrentStyle('padding-bottom', '#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_7') - 0 - 0",
                        "padding-top": "2px",
                        "padding-right": "2px",
                        "padding-bottom": "2px",
                        "padding-left": "16px",
                        "background-color": "#EEEEEE",
                        "background-image": "none",
                        "border-top-width": "1px",
                        "border-top-style": "solid",
                        "border-top-color": "#EEEEEE",
                        "border-right-width": "1px",
                        "border-right-style": "solid",
                        "border-right-color": "#EEEEEE",
                        "border-bottom-width": "1px",
                        "border-bottom-style": "solid",
                        "border-bottom-color": "#EEEEEE",
                        "border-left-width": "1px",
                        "border-left-style": "solid",
                        "border-left-color": "#EEEEEE",
                        "border-radius": "3px 3px 3px 3px"
                      },
                      "expressions": {
                        "width": "Math.max(170 - 1 - 1 - 16 - 2, 0) + 'px'",
                        "height": "Math.max(28 - 1 - 1 - 2 - 2, 0) + 'px'"
                      }
                    }
                  },{
                    "#s-c1a22831-ef8a-41b3-9af5-438e86d2c10e #s-Label_7": {
                      "attributes-ie": {
                        "border-top-width": "1px",
                        "border-top-style": "solid",
                        "border-top-color": "#EEEEEE",
                        "border-right-width": "1px",
                        "border-right-style": "solid",
                        "border-right-color": "#EEEEEE",
                        "border-bottom-width": "1px",
                        "border-bottom-style": "solid",
                        "border-bottom-color": "#EEEEEE",
                        "border-left-width": "1px",
                        "border-left-style": "solid",
                        "border-left-color": "#EEEEEE",
                        "border-radius": "3px 3px 3px 3px",
                        "padding-top": "2px",
                        "padding-right": "2px",
                        "padding-bottom": "2px",
                        "padding-left": "16px",
                        "-pie-background": "#EEEEEE",
                        "-pie-poll": "false"
                      },
                      "expressions-ie": {
                        "width": "Math.max(170 - 1 - 1 - 16 - 2, 0) + 'px'",
                        "height": "Math.max(28 - 1 - 1 - 2 - 2, 0) + 'px'"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      jEvent.launchCases(cases);
    }
  })
  .on("mouseleave dragleave", ".s-c1a22831-ef8a-41b3-9af5-438e86d2c10e .mouseleave", function(event, data) {
    var jEvent, jFirer, cases;
    if(data === undefined) { data = event; }
    jEvent = jimEvent(event);
    jFirer = jEvent.getDirectEventFirer(this);
    if(jFirer.is("#s-Label_5")) {
      jEvent.undoCases(jFirer);
    } else if(jFirer.is("#s-Label_6")) {
      jEvent.undoCases(jFirer);
    } else if(jFirer.is("#s-Label_7")) {
      jEvent.undoCases(jFirer);
    }
  });