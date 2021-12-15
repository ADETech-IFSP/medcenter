const loop = async () => {
    const request = await fetch("https://discord.com/api/v9/channels/920475624676675616/messages", {
        "headers": {
          "accept": "*/*",
          "accept-language": "pt-BR",
          "authorization": "NTEzMTgwNDg4ODUzMjI1NDgy.YZhOAg.JVvVeeAH6PvBAKKwLMojndkY5lY",
          "content-type": "application/json",
          "sec-fetch-dest": "empty",
          "sec-fetch-mode": "cors",
          "sec-fetch-site": "same-origin",
          "x-debug-options": "bugReporterEnabled",
          "x-discord-locale": "pt-BR",
          "x-super-properties": "eyJvcyI6IkxpbnV4IiwiYnJvd3NlciI6IkRpc2NvcmQgQ2xpZW50IiwicmVsZWFzZV9jaGFubmVsIjoic3RhYmxlIiwiY2xpZW50X3ZlcnNpb24iOiIwLjAuMTYiLCJvc192ZXJzaW9uIjoiNS4xNC4wLTlwYXJyb3QxLWFtZDY0Iiwib3NfYXJjaCI6Ing2NCIsInN5c3RlbV9sb2NhbGUiOiJwdC1CUiIsIndpbmRvd19tYW5hZ2VyIjoiTUFURSxsaWdodGRtLXhzZXNzaW9uIiwiZGlzdHJvIjoiUGFycm90IE9TIDUuMCAoTFRTKSIsImNsaWVudF9idWlsZF9udW1iZXIiOjEwODA0NCwiY2xpZW50X2V2ZW50X3NvdXJjZSI6bnVsbH0="
        },
        "referrer": "https://discord.com/channels/714949142195077150/920475624676675616",
        "referrerPolicy": "strict-origin-when-cross-origin",
        "body": `{\"content\":\"aoba: ${Date.now()}\",\"nonce\":\"${Date.now()}\",\"tts\":false}`,
        "method": "POST",
        "mode": "cors",
        "credentials": "include"
    }); 
    console.log(await request.json());

    setTimeout(() => {
        loop();
    }, 35000)
}

(async function loop(){
    const request = await fetch("https://discord.com/api/v9/channels/920475624676675616/messages", {
        "headers": {
          "accept": "*/*",
          "accept-language": "pt-BR",
          "authorization": "NTEzMTgwNDg4ODUzMjI1NDgy.YZhOAg.JVvVeeAH6PvBAKKwLMojndkY5lY",
          "content-type": "application/json",
          "sec-fetch-dest": "empty",
          "sec-fetch-mode": "cors",
          "sec-fetch-site": "same-origin",
          "x-debug-options": "bugReporterEnabled",
          "x-discord-locale": "pt-BR",
          "x-super-properties": "eyJvcyI6IkxpbnV4IiwiYnJvd3NlciI6IkRpc2NvcmQgQ2xpZW50IiwicmVsZWFzZV9jaGFubmVsIjoic3RhYmxlIiwiY2xpZW50X3ZlcnNpb24iOiIwLjAuMTYiLCJvc192ZXJzaW9uIjoiNS4xNC4wLTlwYXJyb3QxLWFtZDY0Iiwib3NfYXJjaCI6Ing2NCIsInN5c3RlbV9sb2NhbGUiOiJwdC1CUiIsIndpbmRvd19tYW5hZ2VyIjoiTUFURSxsaWdodGRtLXhzZXNzaW9uIiwiZGlzdHJvIjoiUGFycm90IE9TIDUuMCAoTFRTKSIsImNsaWVudF9idWlsZF9udW1iZXIiOjEwODA0NCwiY2xpZW50X2V2ZW50X3NvdXJjZSI6bnVsbH0="
        },
        "referrer": "https://discord.com/channels/714949142195077150/920475624676675616",
        "referrerPolicy": "strict-origin-when-cross-origin",
        "body": `{\"content\":\"aoba: ${Date.now()}\",\"nonce\":\"${Date.now()}\",\"tts\":false}`,
        "method": "POST",
        "mode": "cors",
        "credentials": "include"
    }); 
    console.log(await request.json());

    setTimeout(() => {
        loop();
    }, 70000)
})();