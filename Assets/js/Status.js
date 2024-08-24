function fetchServerStatus() {
    fetch('http://218.93.206.42:8000/mcstatus/')
        .then(response => response.json())
        .then(data => {
            document.getElementById('onlinePlayers').textContent = data.onlinePlayers+"/200人";
            document.getElementById('queryLatency').textContent = data.queryLatency.toFixed(2)+"/ms";
            document.getElementById('tps').textContent = data.tps;
            document.getElementById('cpuUsage').textContent = data.cpu_usage;
            document.getElementById('memoryStatus').textContent = data.memory_status;
            document.getElementById('netIO').textContent = data.net_IO;
        })
        .catch(error => console.error('Fetching server status failed:', error));
}

// 初始化时获取服务器状态
fetchServerStatus();
// 每1秒更新一次服务器状态
setInterval(fetchServerStatus, 3000);